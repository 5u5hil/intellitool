<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EmpRole;
use App\Models\Verticle;
use App\Models\DesignationLevel;
use App\Models\EmpPermission;
use Illuminate\Support\Facades\Input;
use App\Library\Helper;
use App\Models\DesignationHasVerticle;
use Route;
use DB;

class DesignationController extends Controller {

    public function index() {
        $designations = EmpRole::all();
        return view(config('constants.adminPages') . '.designation.index', ['designations' => $designations]);
    }

    public function buildTree($ar, $pid = null,$dash=null) {
        $op = array();
        $newArr = [];
      
        foreach ($ar as $item) {
          
            if ($item['parent_id'] == $pid) {
                
                if($pid == null){
                $op[$item['id']][] = $item['name'];
//                        array(
//                    'name' => $item['name'],
//                    'id' => $item['id'],
//                    'parent_id' => $item['parent_id']
//                );
                }else{
                      $op[$item['id']][] = $dash."".$item['name'];
//                              array(
//                    'name' => $dash."".$item['name'],
//                    'id' => $item['id'],
//                    'parent_id' => $item['parent_id']
//                ); 
                }
              $dash .= "-"; 
                // using recursion
                $children = $this->buildTree($ar, $item['id'],$dash);
                if ($children) {
                   
                    $op[$item['id']][] = $children;
                  
                     
                }
            }
            
          
            
        }
        return $op;
    }

    public function printTree($tree, $r = 0, $p = null) {
        foreach ($tree as $i => $t) {
            $dash = ($t['parent_id'] == 0) ? '' : str_repeat('-', $r) . ' ';
            printf("\t<option value='%d'>%s%s</option>\n", $t['id'], $dash, $t['name']);
            if ($t['parent_id'] == $p) {
                // reset $r
                $r = 0;
            }
            if (isset($t['_children'])) {
                printTree($t['_children'], ++$r, $t['parent_id']);
            }
        }
    }

    public function getDesignations($parentId = null) {
        $categories = [];

        foreach (EmpRole::where('parent_id', null)->get() as $category) {
            $categories = [
                'item' => $category,
                'children' => $this->getDesignations($category->id)
            ];
        }

        return $categories;
    }


    public function addEdit() {
        dd($this->ancestors(EmpRole));

        $design = EmpRole::findOrNew(Input::get('id'));
        $permissions = DB::table("emp_permissions")->get(['id', 'display_name', 'description']);
        $perms = [];
        $i = 0;
        foreach ($permissions as $prmv) {
            $perms[$prmv->description][$i]['perms'] = $prmv->display_name;
            $perms[$prmv->description][$i]['id'] = $prmv->id;
            $i++;
        }

        $desLevel = DB::table("designation_levels")->orderBy("designation", "asc")->pluck('designation', 'id')->prepend('Please Select', '');


       $designAll = EmpRole::orderBy("name", "asc");
        if (!empty(Input::get('id')))
            $designAll = $designAll->where("id", "!=", Input::get('id'));

        
     // $roleArr = $this->buildTree($designAll->get()->toArray());
        
        
        
      
        $getRepoting = $designAll->pluck('name', 'id')->prepend('Please Select', '');

        $verticlesSel = DB::table('verticles')->pluck('name', 'id')->prepend('Please Select', '');

        return view(config('constants.adminPages') . '.designation.addEdit', ['design' => $design, 'permissions' => $perms, 'getRepoting' => $getRepoting, 'desLevel' => $desLevel, 'verticlesSel' => $verticlesSel]);
    }

    public function saveUpdate() {

        //dd(Input::all());
        $saveRole = EmpRole::findOrNew(Input::get('id'));
        $saveRole->name = Input::get('name');
        $saveRole->display_name = Input::get('name');
        $saveRole->parent_id = Input::get('parent_id');
        
        $saveRole->designation_level_id = Input::get('designation_level_id');
        $saveRole->system_access = Input::get('system_access');
        $saveRole->save();

        if (!empty(Input::get('chk'))) {
            $saveRole->perms()->sync(Input::get('chk'));
        }




        if (!empty(Input::get('verticle_ids'))) {

            $verticles = [];
            foreach (Input::get('verticle_ids') as $verid) {
                array_push($verticles, new DesignationHasVerticle(['verticle_id' => $verid]));
            }
            $saveRole->verticles()->delete();
            $saveRole->verticles()->saveMany($verticles);
        }


        return redirect()->route('admin.designation.list');
    }

    public function updatePermissions() {
        foreach (Route::getRoutes() as $value) {
            if (strpos($value->getPrefix(), "admin") !== false) {
                try {
                    $displayName = ucwords(strtolower(str_replace(".", " ", str_replace("admin.", "", $value->getName()))));
                    $displayName1 = end((explode(".", $value->getName())));

                    $chkPerm = EmpPermission::where('name', '=', $value->getName())->first();

                    if (!empty($chkPerm))
                        $permissions = EmpPermission::where('name', '=', $value->getName())->firstOrFail();
                    else
                        $permissions = new EmpPermission();

                    $permissions->name = $value->getName();
                    $permissions->display_name = @$displayName1;

                    $permissions->prefix = @$value->getPrefix();
                    $permissions->description = end((explode("/", $permissions->prefix)));
                    $permissions->save();
                } catch (\Illuminate\Database\QueryException $e) {
                    
                }
            }
        }
        return "success";
    }

}
