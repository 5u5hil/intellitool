<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AssetCategory;
class AssetCategory extends Model
{
    //
    public static function getListing(){
      return  AssetCategory::paginate(4);
        
    }
    public static function addEdit(){
        return "Hello";
    }
}
