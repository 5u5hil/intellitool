<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\Helper;
use App\Models\DesignationLevel;
use Illuminate\Support\Facades\Input;
use Validator;
class DesignationLevelController extends Controller {
    public function index() {
        $designationLevel = DesignationLevel::listing();
        $data = ['designationLevel' => $designationLevel];
        $viewname = Config('constants.adminPages') . '.designation-level.index';
        return Helper::returnView($viewname, $data);
    }
    public function add() {
        $data = DesignationLevel::addEdit(Input::get('id'));
        return Helper::returnView(Config('constants.adminPages') . '.designation-level.addEdit', $data);
    }
    public function save() {
        Validator::make(Input::all(), ['designation' => 'required'], ['designation' => 'Designation Field cannot be blank!'])->validate();
        DesignationLevel::saveUpdate(Input::all());
        $redirectTo = 'admin.designation.level.list';
        return Helper::returnView(null, null, $redirectTo);
    }
}
