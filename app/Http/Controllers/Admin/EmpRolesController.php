<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EmpRole;
use App\Models\EmpPermission;
use Illuminate\Support\Facades\Input;
use App\Library\Helper;
use Route;

class EmpRolesController extends Controller {

    public function index() {
        
       
        $roles = EmpRole::all();
        return view(config('constants.adminPages') . '.employee.role.index', ['roles' => $roles]);
    }

        public function ancestors()
{
    $ancestors = $this->where('id', '=', $this->parent_id)->get();

    while ($ancestors->last() && $ancestors->last()->parent_id !== null)
    {
        $parent = $this->where('id', '=', $ancestors->last()->parent_id)->get();
        $ancestors = $ancestors->merge($parent);
    }

    return $ancestors;
}
    public function addEdit() {

        $role = EmpRole::findOrNew(Input::get('id'));
        foreach (Route::getRoutes() as $value) {
            if (strpos($value->getPrefix(), "admin") !== false) {
                try {
                    $displayName = ucwords(strtolower(str_replace(".", " ", str_replace("admin.", "", $value->getName()))));

                    if (!empty($value->getName()))
                        $permissions = EmpPermission::where('name', '=', $value->getName())->firstOrFail();
                    else
                        $permissions = new EmpPermission();

                    $permissions->name = $value->getName();
                    $permissions->display_name = @$displayName;
                    $permissions->description = "";
                    $permissions->prefix = @$value->getPrefix();
                    $permissions->save();
                } catch (\Illuminate\Database\QueryException $e) {
                    
                }
            }
        }

        $permissions = EmpPermission::all();

        $perms = [];
        $i = 0;
        foreach ($permissions as $prmk => $prmv) {
            $getEnd = end((explode("/", $prmv->prefix)));
            $perms[$getEnd][$i]['perms'] = $prmv->display_name;
            $perms[$getEnd][$i]['id'] = $prmv->id;
            $perms[$getEnd][$i]['routes'] = $prmv->prefix;
            $i++;
        }

        return view(config('constants.adminPages') . '.employee.role.addEdit', ['role' => $role, 'permissions' => $perms]);
    }

    public function saveUpdate() {

        //dd(Input::all());
        $saveRole = EmpRole::findOrNew(Input::get('id'));
        $saveRole->name = Input::get('name');
        $saveRole->display_name = Input::get('display_name');
        $saveRole->description = Input::get("description");
        $saveRole->save();

        if (!empty(Input::get('chk'))) {
            $saveRole->perms()->sync(Input::get('chk'));
        }
        
        return redirect()->route('admin.employee.role.list');
    }

}
