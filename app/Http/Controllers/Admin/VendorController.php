<?php
namespace App\Http\Controllers\Admin;
use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Library\Helper;
use Validator;
class VendorController extends Controller {
    public function index() {
        $vendors = Vendor::listing();
        $data = ['vendors' => $vendors];
        $viewname = Config('constants.adminPages') . '.vendor.index';
        return Helper::returnView($viewname, $data);
    }
    public function addEdit() {
        $data = Vendor::addEdit(Input::get('id'));
        return Helper::returnView(Config('constants.adminPages') . '.vendor.addEdit', $data);
    }
    public function saveUpdate() {
        $vendorClass = new Vendor();
        $input = Input::all();
        $validator = Validator::make($input, Vendor::rules(Input::get('id')), $vendorClass->messages)->validate();
        Vendor::saveUpdate($input);
        $redirectTo = 'admin.vendor.list';
        return Helper::returnView(null,null, $redirectTo);
    }
}
