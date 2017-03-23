<?php

namespace App\Models;

use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use App\Models\AssetCategory;
use Validator;

class AssetCategory extends Model {

    protected $fillable = ['name', 'status'];

    //
    public static function getListing($perPage) {
        return AssetCategory::paginate($perPage);
    }

    public static function addEdit($id) {
        return AssetCategory::findOrNew($id);
    }

    public static function saveUpdate($request) {
        $assetCategory = AssetCategory::findOrNew($request['id']);
        return $assetCategory->fill($request)->save();
    }
    
    public static function getSelect(){
        return self::where('status',1)->pluck('name','id')->prepend('Please Select'," ")->toArray();
    }

}
