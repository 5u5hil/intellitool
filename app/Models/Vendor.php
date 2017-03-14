<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
     protected $table = 'vendors';
     
     public function getlist(){
         $list = Vendor::where("active",1)->paginate(Config('constants.adminPaginateNo'));
         return $list;
         
     }
}
