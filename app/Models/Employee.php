<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class Employee extends Authenticatable {

    protected $table = 'employee';

    use Notifiable,
        EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function rules($id = null, $merge = []) {
        return array_merge(
             [
            'roles' => 'required',
            'firstname' => 'required',
            'email' => 'required|email|unique:employee' . ($id ? ",email,$id" : ''),
            'phone' => 'required|numeric|unique:employee' . ($id ? ",phone,$id" : '')
                ], $merge);
    }

    public $messages = [
        'roles.required' => 'Designation is required.',
        'email.unique' => 'Email Id have been already taken',
        'email.required' => 'Email Id is required',
        'phone.required' => 'Phone is required',
        'phone.unique' => 'Phone number have been already taken',
        'phone.numeric' => 'Phone number should be valid'
    ];
    
    
      public function reportto(){
          return $this->hasMany("App\Models\EmployeeReportTo","employee_id");
      }

}
