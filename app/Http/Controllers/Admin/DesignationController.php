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
use Route;

class DesignationController extends Controller {

    public function index() {
        $designations = EmpRole::all();
        return view(config('constants.adminPages') . '.designation.index', ['designations' => $designations]);
    }

    public function buildTree($ar, $pid = null) {
        $op = array();
        foreach ($ar as $item) {
            if ($item['parent_id'] == $pid) {
                $op[$item['id']] = array(
                    'name' => $item['name'],
                    'id' => $item['id'],
                    'parent_id' => $item['parent_id']
                );
                // using recursion
                $children = $this->buildTree($ar, $item['id']);
                if ($children) {
                    $op[$item['id']]['children'] = $children;
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
        $design = EmpRole::findOrNew(Input::get('id'));


        $permissions = EmpPermission::get(['id', 'prefix', 'display_name']);
        $perms = [];
        $i = 0;
        foreach ($permissions as $prmk => $prmv) {
            $getEnd = end((explode("/", $prmv->prefix)));
            $perms[$getEnd][$i]['perms'] = $prmv->display_name;
            $perms[$getEnd][$i]['id'] = $prmv->id;
            $perms[$getEnd][$i]['routes'] = $prmv->prefix;
            $i++;
        }

        $designationlavels = DesignationLevel::orderBy("designation", "asc")->get(['id', 'designation']);
        $desLevel = ['' => 'Please Select'];
        foreach ($designationlavels as $desg) {
            $desLevel[$desg->id] = $desg->designation;
        }
        $designAll = EmpRole::orderBy("name", "asc");
        if (!empty(Input::get('id')))
            $designAll = $designAll->where("id", "!=", Input::get('id'));

        $getRepoting = ['' => 'Please Select'];

        //  $designAll = $this->buildTree($designAll->get()->toArray());

        $new = [];
        foreach ($designAll->get() as $dsg) {
            $getRepoting[$dsg['id']] = $dsg['name'];
        }


        $verticles = Verticle::all();
        $verticlesSel = ['' => 'Please Select'];
        foreach ($verticles as $vert) {
            $verticlesSel[$vert->id] = $vert->name;
        }

        return view(config('constants.adminPages') . '.designation.addEdit', ['design' => $design, 'permissions' => $perms, 'getRepoting' => $getRepoting, 'desLevel' => $desLevel, 'verticlesSel' => $verticlesSel]);
    }

    public function saveUpdate() {

        //dd(Input::all());
        $saveRole = EmpRole::findOrNew(Input::get('id'));
        $saveRole->name = Input::get('name');
        $saveRole->display_name = Input::get('name');
        $saveRole->parent_id = Input::get('parent_id');
        $saveRole->designation_level_id = Input::get('designation_level_id');
        $saveRole->verticle_id = Input::get('verticle_id');
        $saveRole->system_access = Input::get('system_access');
        $saveRole->save();

        if (!empty(Input::get('chk'))) {
            $saveRole->perms()->sync(Input::get('chk'));
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
                    $permissions->description = "";
                    $permissions->prefix = @$value->getPrefix();
                    $permissions->save();
                } catch (\Illuminate\Database\QueryException $e) {
                    
                }
            }
        }
        return "success";
    }

}
