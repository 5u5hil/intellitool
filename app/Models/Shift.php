<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use DB;

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

    public static function listing() {
        $list = DB::select("select * from shifts order by id desc");
        $list = new Paginator($list, Config("constants.adminPaginateNo"));
        return $list;
    }

    public static function addEdit($id) {
        $shift = Shift::findOrNew($id);
        $data = ['shift' => $shift];
        return $data;
    }

    public static function saveUpdate($input) {
        $shift = self::findOrNew($input['id']);
        $shift->name=$input['name'];
        $shift->active=$input['active'];
        $shift->starttime = date('H:i:s', strtotime($input['starttime']));
        $shift->endtime = date('H:i:s', strtotime($input['endtime']));
        $shift->update();
        return $shift;
    }

}
