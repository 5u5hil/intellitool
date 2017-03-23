<?php namespace App\Models;

use Zizaco\Entrust\EntrustPermission;

class EmpPermission extends EntrustPermission
{
       protected $table = 'emp_permissions';
       
       public static function getSelect(){
           $permissions = self::pluck('name','id')->toArray();  
           return $permissions;
       }
       
}