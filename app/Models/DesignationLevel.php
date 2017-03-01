<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DesignationLevel extends Model {

    protected $table = 'designation_levels';
    public $timestamps = false;
    
        protected $fillable = [
        'designation'
    ];
    
    

}
