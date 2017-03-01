<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DesignationLevel;
use Illuminate\Support\Facades\Input;

class DesignationLevelController extends Controller {

    //

    public function index() {
        $getDesignationLevel=DesignationLevel::paginate(10);
        
        return view(config('constants.adminPages') . '.designation-level.index',['designationLevel'=>$getDesignationLevel]);
    }

    public function add() {
                $getDesignationLevel = DesignationLevel::findOrNew(Input::get('id'));

        return view(config('constants.adminPages') . '.designation-level.add',['designationLevel'=>$getDesignationLevel]);
    }

    public function save() {
        $saveUpdateCat = DesignationLevel::findOrNew(Input::get('id'));
        $saveUpdateCat->fill(Input::all())->save();
          return redirect()->route('admin.designation.level.list');
    }

}
