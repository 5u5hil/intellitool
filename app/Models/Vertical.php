<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vertical extends Model
{
       protected $table = 'verticals';
       
       public static function getSelect(){
           $verticals = self::pluck('name','id')->prepend("Please Select","");  
           return $verticals;
       }
       
   
}
