<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
    //
    
    public static function getSelect(){
        return self::pluck('name','id')->prepend('Please Select'," ")->toArray();
    }
}
