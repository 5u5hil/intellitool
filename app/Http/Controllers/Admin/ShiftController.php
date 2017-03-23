<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\Shift;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
class ShiftController extends Controller {
    public function index() {
        $shifts = Shift::orderBy("id", "desc")->paginate(Config('constants.adminPaginateNo'));
        return view(Config('constants.adminPages') . '.shift.index', ['shifts' => $shifts]);
    }
    public function addEdit() {
        $shift = Shift::findOrNew(Input::get('id'));
        return view(Config('constants.adminPages') . '.shift.addEdit', ['shift' => $shift]);
    }
    public function saveUpdate(Request $request) {
        $validation = new Shift();
        $validator = Validator::make($request->all(), $validation->rules(Input::get('id')), $validation->messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $shift = Shift::findOrNew(Input::get('id'));
            $shift->fill(Input::except('starttime', 'endtime'))->save();
            $shift->starttime = date('H:i:s', strtotime(Input::get('starttime')));
            $shift->endtime = date('H:i:s', strtotime(Input::get('endtime')));
            $shift->update();
        }
        return redirect()->route('admin.shift.list');
    }
}
