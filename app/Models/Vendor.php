<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
     protected $table = 'vendors';
     
     protected $fillable = ['firstname', 'lastname', 'email','phone','address','status'];
     protected $guarded = ['vertical_ids'];
     
     public static function getListing(){
         $list = Vendor::where("status",1)->paginate(10);
         return $list;
         
     }
}
