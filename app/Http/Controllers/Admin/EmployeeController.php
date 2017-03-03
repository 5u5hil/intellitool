<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
   public function index(){
   $employees = Employee::paginate(Config('constants.adminPaginateNo'));
   $roles = EmpRole::get(['id', 'name'])->toArray();
     return view(Config('constants.adminPages') . '.employee.index',['employees', 'roles']);

       
   }
    
    
    
}
