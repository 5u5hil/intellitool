<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
     protected $table = 'vendors';
     
     protected $fillable = ['firstname', 'lastname', 'email','phone','address','status'];
     protected $guarded = ['vertical_ids'];
     
     
     public static function rules($id = null, $merge = []) {
        return array_merge(
             [
            'firstname' => 'required',
            'lasttname' => 'required',
            'email' => 'required|email|unique:vendors' . ($id ? ",email,$id" : ''),
            'phone' => 'required|numeric|unique:vendors' . ($id ? ",phone,$id" : '')
                ], $merge);
    }

    public $messages = [
        'firstname.required' => 'Firstname is required.',
        'lastname.required' => 'Lastname is required.',
        'email.unique' => 'Email Id have been already taken',
        'email.required' => 'Email Id is required',
        'phone.required' => 'Phone is required',
        'phone.unique' => 'Phone number have been already taken',
        'phone.numeric' => 'Phone number should be valid'
    ];
     
     
     public static function getListing(){
         $list = Vendor::where("status",1)->paginate(10);
         return $list;
         
     }
}
