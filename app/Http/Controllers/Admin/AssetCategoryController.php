<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Input;
use App\Models\AssetCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\Helper;
use Route;
use Validator;
use Session;
class AssetCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
      // dd(AssetCategory::getListing());
      return Helper::returnView(Config('constants.adminPages') . '.asset-category.index',['getAssetCategory'=>AssetCategory::getListing(8)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addEdit()
    {
        return Helper::returnView(Config('constants.adminPages').'.asset-category.addEdit',['assetCategory'=>AssetCategory::addEdit(Input::get('id'))]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveUpdate(Request $request)
    {
     Validator::make(Input::all(),['name'=>'required'],['name'=>'Name field is required'])->validate();
     AssetCategory::saveUpdate(Input::all());
     Session::flash('successMsg','Successfully saved.');
     return redirect()->route('admin.asset.category.list');
    }

 

}
