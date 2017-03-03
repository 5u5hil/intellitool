<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DesignationHasVerticle extends Model
{
    public $timestamps=false;
   protected $table = 'designation_has_verticles';
   
   public $fillable= ['verticle_id','designation_id'];
}
