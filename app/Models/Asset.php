<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Asset;

class Asset extends Model {

    protected $fillable= ['machine_name','asset_category','vertical','model','serial_number','description','make','installation_date','warranty_upto','amc_start_date','amc_end_date','amc_vendor','installation_location'];

    //
    public static function getListing($perPage) {
        return Asset::paginate($perPage);
    }

    public static function addEdit($id) {
        $asset = Asset::findOrNew($id);
        return $asset;
    }

    public static function saveUpdate($request) {
        $getAsset = Asset::findOrNew($request['id']);
        return $getAsset->fill($request)->save();
    }

}
