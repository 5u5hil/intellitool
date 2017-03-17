<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Library\Helper;
use DB;

class Vendor extends Model {

    protected $table = 'vendors';
    protected $fillable = ['firstname', 'lastname', 'email', 'phone', 'address', 'status'];
    protected $guarded = ['vertical_ids'];

    public static function rules($id = null, $merge = []) {
        return array_merge(
                [
            'firstname' => 'required',
            'lastname' => 'required',
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

    public static function listing() {
        $list = self::paginate(10);
        return $list;
    }

    public static function addEdit($id) {
        $verticalSel = DB::table('verticals')->pluck('name', 'id')->prepend('Please Select', '')->toArray();
        $vendor = self::findOrNew($id);
        $data = ['vendor' => $vendor, 'verticalSel' => $verticalSel];
        return $data;
    }

    public static function saveUpdate($input) {
        $vendor = self::findOrNew($input['id']);
        $vendor->fill($input)->save();
        if (!empty($input['vertical_ids'])) {
            $vendor->vendorverticals()->sync($input['vertical_ids']);
        }
    }

    public function vendorverticals() {
        return $this->belongsToMany("App\Models\Vertical", "vendor_has_verticals", "vendor_id", "vertical_id");
    }

}
