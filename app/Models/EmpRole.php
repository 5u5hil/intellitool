<?php

namespace App\Models;

use Zizaco\Entrust\EntrustRole;

class EmpRole extends EntrustRole {

    protected $table = 'emp_roles';
    public $rules = [
        'name' => 'required',
        'designation_level_id' => 'required',
        'verticle_ids' => 'required'
    ];

    public static function rules($id = null, $merge = []) {
        return array_merge(
                [
            'name' => 'required',
            'designation_level_id' => 'required',
            'verticle_ids' => 'required'
                ], $merge);
    }

    public $messages = [
        'name.required' => 'Designation is required.',
        'designation_level_id.required' => 'Designation Level is required',
        'verticle_ids.required' => 'Verticle is required'
    ];

    public function verticles() {
        return $this->hasMany("App\Models\DesignationHasVerticle", "designation_id");
    }

    public function designationverticles() {
        return $this->belongsToMany("App\Models\Verticle", "designation_has_verticles", "designation_id", "verticle_id");
    }

    public function designationlevel() {
        return $this->belongsTo("App\Models\DesignationLevel", "designation_level_id");
    }

}
