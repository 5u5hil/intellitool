<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\Shift;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Library\Helper;
class ShiftController extends Controller {
    public function index() {
        $shifts = Shift::listing();
        $data = ['shifts' => $shifts];
        $viewname = Config('constants.adminPages') . '.shift.index';
        return Helper::returnView($viewname, $data);
    }
    public function addEdit() {
        $data = Shift::addEdit(Input::get('id'));
        return Helper::returnView(Config('constants.adminPages') . '.shift.addEdit', $data);
    }
    public function saveUpdate() {
        $validation = new Shift();
        $validator = Validator::make(Input::all(), $validation->rules(Input::get('id')), $validation->messages)->validate();
        Shift::saveUpdate(Input::all());
        $redirectTo = 'admin.shift.list';
        return Helper::returnView(null, null, $redirectTo);
    }
}
