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
use Validator;
class DesignationController extends Controller {
    public function index() {
        $designations = EmpRole::listing();
        $data = ['designations' => $designations];
        $viewname = Config('constants.adminPages') . '.designation.index';
        return Helper::returnView($viewname, $data);
    }
    public function buildTree($ar, $pid = null, $dash = null) {
        $op = array();
        $newArr = [];
        foreach ($ar as $item) {
            if ($item['parent_id'] == $pid) {
                if ($pid == null) {
                    $op[$item['id']][] = $item['name'];
//                        array(
//                    'name' => $item['name'],
//                    'id' => $item['id'],
//                    'parent_id' => $item['parent_id']
//                );
                } else {
                    $op[$item['id']][] = $dash . "" . $item['name'];
//                              array(
//                    'name' => $dash."".$item['name'],
//                    'id' => $item['id'],
//                    'parent_id' => $item['parent_id']
//                ); 
                }
                $dash .= "-";
                // using recursion
                $children = $this->buildTree($ar, $item['id'], $dash);
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
    private function getCategories($parentId = null) {
        $categories = [];
        foreach (EmpRole::where('parent_id', null)->get() as $category) {
            $categories = [
                'item' => $category,
                'children' => $this->getCategories($category->id)
            ];
        }
        return $categories;
    }
    public function addEdit() {
        $data = EmpRole::addEdit(Input::get('id'));
        $viewname = Config('constants.adminPages') . '.designation.addEdit';
        return Helper::returnView($viewname, $data);
    }
    public function saveUpdate() {
        $validation = new EmpRole();
        $validator = Validator::make(Input::all(), $validation->rules(Input::get('id')), $validation->messages)->validate();
        EmpRole::saveUpdate($input);
        $redirectTo = 'admin.designation.list';
        return Helper::returnView(null, null, $redirectTo);
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
