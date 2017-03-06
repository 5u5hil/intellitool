<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model {

    protected $table = 'shifts';
    protected $fillable = [
        'name', 'starttime', 'endtime', 'active'
    ];

    public static function rules($id = null, $merge = []) {
        return array_merge(
                [
            'name' => 'required',
            'starttime' => 'required',
            'endtime' => 'required'
                ], $merge);
    }

    public $messages = [
        'name.required' => 'Name is required.',
        'starttime.required' => 'Starttime is required',
        'endtime.required' => 'Endtime is required'
    ];

}
