<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EmpRole;
use App\Models\EmpPermission;
use Illuminate\Support\Facades\Input;
use App\Library\Helper;
use Route;

class EmpRolesController extends Controller
{
    public function index(){
        $roles = EmpRole::all();
         return view(config('constants.adminPages') . '.employee.role.index',['roles'=>$roles]);
    }
    
    public function addEdit(\Illuminate\Http\Request $request){
       
    $role =   EmpRole::findOrNew(Input::get('id'));
        foreach (Route::getRoutes() as $value) {
       
            if (strpos($value->getPrefix(), "admin") !== false) {
                try {
                    $displayName = ucwords(strtolower(str_replace(".", " ", str_replace("admin.", "", $value->getName()))));
                    $permissions = new EmpPermission();
                    $permissions->name = $value->getName();
                    $permissions->display_name = $displayName;
                    $permissions->description = $value->getPrefix();
                    $permissions->save();
                } catch (\Illuminate\Database\QueryException $e) {
                    
                }
            }
        }
        
     $permissions =   EmpPermission::all(); 
    
      return view(config('constants.adminPages') . '.employee.role.addEdit',['role'=>$role,'permissions'=>$permissions]);
  
    }
    
    public function saveUpdate(){
        
    }
    
}
