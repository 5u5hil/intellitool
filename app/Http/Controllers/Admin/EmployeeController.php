<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\EmpRole;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Hash;

class EmployeeController extends Controller {

    public function index() {
        $employees = Employee::paginate(Config('constants.adminPaginateNo'));
        $roles = EmpRole::get(['id', 'name'])->toArray();
        return view(Config('constants.adminPages') . '.employee.index', ['employees' => $employees, 'roles' => $roles]);
    }

    public function addEdit() {
        $employee = Employee::findOrNew(Input::get('id'));
        $roles = EmpRole::orderBy("name", "asc")->pluck('name', 'id')->prepend("Please Select", "");
        return view(Config('constants.adminPages') . '.employee.addEdit', ['employee' => $employee, 'roles' => $roles]);
    }

    public function saveUpdate() {
        
//       $validation = new Employee();
//        $validator = Validator::make(Input::all(), $validation->rules(), $validation->messages);
//        dd($validator);
//        if ($validator->fails()) {
//            return $validator->messages()->toJson();
//        } else {
            $employee = Employee::findOrNew(Input::get('id'));
            $employee->name = Input::get('name');
            $employee->email = Input::get('email');
            $employee->emp_code = Input::get('emp_code');
            $employee->phone = Input::get('phone');
            $employee->password = (Input::get('password')) ? Hash::make(Input::get('password')) : $employee->password;
            $employee->save();

            if (!empty(Input::get('roles'))) {
                $employee->roles()->sync([Input::get('roles')]);
            }
       // } 
        return redirect()->route('admin.employee.list');
    }

}
