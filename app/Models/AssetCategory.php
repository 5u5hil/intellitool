<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AssetCategory;
class AssetCategory extends Model
{
    //
    public static function getListing($perPage){
      return  AssetCategory::paginate($perPage);  
    }
    public static function addEdit(){
        return AssetCategory::findOrNew(Input::get('id'));
    }
}
