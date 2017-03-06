<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\EmpRole;
use App\Models\EmployeeReportTo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Validator;
use Hash;
use DB;

class EmployeeController extends Controller {

    public function index() {
        $employees = Employee::paginate(Config('constants.adminPaginateNo'));
        $reportTo = Employee::select(DB::raw("CONCAT(firstname,' ',lastname) AS name"), 'id')->pluck('name', 'id');
        $roles = EmpRole::get(['id', 'name'])->toArray();
        return view(Config('constants.adminPages') . '.employee.index', ['employees' => $employees, 'roles' => $roles, 'reportTo' => $reportTo]);
    }

    public function addEdit() {
        $employee = Employee::findOrNew(Input::get('id'));
        $roles = EmpRole::orderBy("name", "asc")->pluck('name', 'id')->prepend("Please Select","");
        $reportTo = Employee::select(DB::raw("CONCAT(firstname,' ',lastname) AS name"), 'id')->where("id", "!=", Input::get('id'))->pluck('name', 'id');
        return view(Config('constants.adminPages') . '.employee.addEdit', ['employee' => $employee, 'roles' => $roles, 'reportTo' => $reportTo]);
    }

    public function saveUpdate(Request $request) {
   $validation = new Employee();
           $validator = Validator::make($request->all(),$validation->rules(Input::get('id')),$validation->messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
        $employee = Employee::findOrNew(Input::get('id'));
        $employee->firstname = Input::get('firstname');
        $employee->lastname = Input::get('lastname');
        $employee->email = Input::get('email');
        $employee->emp_code = Input::get('emp_code');
        $employee->phone = Input::get('phone');
        $employee->password = (Input::get('password')) ? Hash::make(Input::get('password')) : $employee->password;
        $employee->save();


        if (!empty(Input::get('reports_to'))) {
            $reportto = [];
            foreach (Input::get('reports_to') as $rptid) {
                array_push($reportto, new EmployeeReportTo(['report_to' => $rptid]));
            }
            $employee->reportto()->delete();
            $employee->reportto()->saveMany($reportto);
        }

        if (!empty(Input::get('roles'))) {
            $employee->roles()->sync([Input::get('roles')]);
        }
         } 
        return redirect()->route('admin.employee.list');
    }

}
