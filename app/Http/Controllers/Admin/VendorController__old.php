<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Library\Helper;
use Validator;

class VendorController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $vendors = Vendor::getListing();
        $data = ['vendors' => $vendors];
        $viewname = Config('constants.adminPages') . '.vendor.index';
        return Helper::returnView($viewname, $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $vendor = Vendor::findOrNew(Input::get('id'));
        $data = ['vendor' => $vendor];
        return Helper::returnView(Config('constants.adminPages') . '.vendor.addEdit', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store() {
        $vendorClass = new Vendor();
        $validator = Validator::make(Input::all(), Vendor::rules(Input::get('id')), $vendorClass->messages)->validate();

        $vendor = Vendor::firstOrCreate(['id' => Input::get('id')]);
        $vendor->fill(Input::all());
        $vendor->save();
        $data = [];

        $redirectTo = route('admin.vendor.list');
        return Helper::returnView(null, $data, $redirectTo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor) {
        echo "update method";
        dd(Input::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor) {
        //
    }
    
       public function saveUpdate() {
        //
    }

}
