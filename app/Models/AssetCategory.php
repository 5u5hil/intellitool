<?php

namespace App\Models;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use App\Models\AssetCategory;
use Validator;

class AssetCategory extends Model
{
    protected  $fillable=['name','status'];
    //
    public static function getListing($perPage){
      return  AssetCategory::paginate($perPage);  
    }
    public static function addEdit(){
        return AssetCategory::findOrNew(Input::get('id'));
    }
    public static function saveUpdate(){
       $assetCategory= AssetCategory::findOrNew(Input::get('id'));
       return $assetCategory->fill(Input::all())->save();
    }
}
