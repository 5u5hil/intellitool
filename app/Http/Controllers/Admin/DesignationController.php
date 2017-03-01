<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EmpRole;
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

    public function addEdit() {

        $design = EmpRole::findOrNew(Input::get('id'));
        foreach (Route::getRoutes() as $value) {
            if (strpos($value->getPrefix(), "admin") !== false) {
                try {
                    $displayName = ucwords(strtolower(str_replace(".", " ", str_replace("admin.", "", $value->getName()))));

                    $chkPerm = EmpPermission::where('name', '=', $value->getName())->first();

                    if (!empty($chkPerm))
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
        $designationlavels = DesignationLevel::all();
        $desLevel = ['' => 'Please Select'];
        foreach ($designationlavels as $desg) {
            $desLevel[$desg->id] = $desg->designation;
        }

        $getRepoting = ['' => 'Please Select'];
$designAll = EmpRole::all();
        foreach ($designAll as $dsg) {
            $getRepoting[$dsg->id] = $dsg->name;
        }

        $perms = [];
        $i = 0;
        foreach ($permissions as $prmk => $prmv) {
            $getEnd = end((explode("/", $prmv->prefix)));
            $perms[$getEnd][$i]['perms'] = $prmv->display_name;
            $perms[$getEnd][$i]['id'] = $prmv->id;
            $perms[$getEnd][$i]['routes'] = $prmv->prefix;
            $i++;
        }

        return view(config('constants.adminPages') . '.designation.addEdit', ['design' => $design, 'permissions' => $perms, 'getRepoting'=>$getRepoting,'desLevel' => $desLevel]);
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

        return redirect()->route('admin.designation.list');
    }

}
