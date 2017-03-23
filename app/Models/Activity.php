<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Pagination\Paginator;

class Activity extends Model {

    protected $table = 'activities';
    protected $fillable = ['name', 'status'];
    protected $casts = [
        'verticals' => 'json'
    ];

    public static function rules($id = null, $merge = []) {
        return array_merge(
                [
            'name' => 'required',
            'vertical_ids' => 'required'
                ], $merge);
    }

    public $messages = [
        'name.required' => 'Activity is required.',
        'vertical_ids.required' => 'Vertical is fdfg required.'
    ];

    public static function listing() {
        $list = DB::select("SELECT a.id,a.name,a.status,a.created_at,group_concat(vt.name SEPARATOR ', ') as verticals FROM `activities` a left join verticals vt on JSON_CONTAINS(a.verticals->'$[*]', CAST(vt.id as JSON), '$') GROUP by a.id");
        $list = new Paginator($list, Config('constants.adminPaginateNo'));
        return $list;
    }

    public static function addEdit($id) {
        $verticalSel = Vertical::getSelect();
        $activity = self::findOrNew($id);
        $data = ['activity' => $activity, 'verticalSel' => $verticalSel];
        return $data;
    }

    public static function saveUpdate($input) {
        $activity = self::findOrNew($input['id']);
        $activity->fill($input)->save();
        if (!empty($input['vertical_ids'])) {
            $activity->verticals = array_map('intval', $input['vertical_ids']);
            $activity->update();
        }
    }

}
