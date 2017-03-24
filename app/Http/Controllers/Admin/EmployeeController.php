<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\EmpRole;
use App\Models\EmployeeReportTo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Library\Helper;
use Validator;
use Hash;
use DB;
use Session;
class EmployeeController extends Controller {
    public function index() {
        $employees = Employee::listing();
        $data = ['employees' => $employees];
        return Helper::returnView(Config('constants.adminPages') . '.employee.index', $data);
    }
    public function addEdit() {
        $data = Employee::addEdit(Input::get('id'));
        return Helper::returnView(Config('constants.adminPages') . '.employee.addEdit', $data);
    }
    public function saveUpdate() {
        $validation = new Employee();
        $validator = Validator::make(Input::all(), $validation->rules(Input::get('id')), $validation->messages)->validate();
        $data = Employee::saveUpdate(Input::all());
        $redirectTo = 'admin.employee.list';
        Session::flash('successMsg', 'Successfully saved.'); 
        return Helper::returnView(null,$data,'admin.employee.list');
    }
}
