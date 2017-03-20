<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\AssetCategory;
use App\Models\Vertical;
use App\Models\Make;
use Illuminate\Support\Facades\Input;

class AssetController extends Controller {

    public function index() {
        $asset=Asset::getListing(8);
        return view(Config('constants.adminPages') . '.asset.index',['getAsset'=>$asset]);
    }

    public function addEdit() {
        $getAssetCategory = AssetCategory::getSelect();
        $vertical = Vertical::getSelect();
        $make=Make::getSelect();

        // $shift = Shift::findOrNew(Input::get('id'));
        return view(Config('constants.adminPages') . '.asset.addEdit', ['getAsset' => Asset::addEdit(Input::get('id')), 'assetCategory' => $getAssetCategory, 'vertical' => $vertical,'make'=>$make]);
    }

    public function saveUpdate() {
        Asset::saveUpdate(Input::all());
        return redirect()->route('admin.asset.list');
    }

}
