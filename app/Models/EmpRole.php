<?php namespace App\Models;

use Zizaco\Entrust\EntrustRole;

class EmpRole extends EntrustRole
{
      protected $table = 'emp_roles';
      public $rules = [
        'display_name' => 'required',
        'description' => 'required',
        'name' => 'required'
    ];
}