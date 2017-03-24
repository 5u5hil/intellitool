<?php
namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Pagination\Paginator;
use DB;
use Hash;
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
        'firstname', 'lastname', 'email', 'emp_code', 'phone',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'reports_to' => 'json'
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
    public static function getSelect($id = null) {
        if (is_null($id))
            return Self::select(DB::raw("CONCAT(firstname,' ',lastname) AS name"), 'id')->pluck('name', 'id')->toArray();
        else
            return Self::select(DB::raw("CONCAT(firstname,' ',lastname) AS name"), 'id')->where("id", "!=", $id)->pluck('name', 'id')->toArray();
    }
    public static function listing() {
        $list = DB::select("SELECT e.id,e.firstname,e.emp_code,e.created_at,e.lastname,e.email,e.phone,d.name as designation,group_concat(CONCAT(r.firstname,' ',r.lastname))as reportsto FROM `employee` e left join emp_roles d on e.designation_id=d.id 
left join employee r on JSON_CONTAINS(e.reports_to->'$[*]', CAST(r.id as JSON), '$') GROUP by e.id");
        return new Paginator($list, Config("constants.adminPaginateNo"));
    }
    public static function addEdit($id) {
        $employee = self::findOrNew($id);
        $reportsTo = self::getSelect($id);
        $roles = EmpRole::getSelect();
        $data = ['reportsTo' => $reportsTo, 'roles' => $roles, 'employee' => $employee];
        return $data;
    }
    public static function saveUpdate($input) {
        $employee = Employee::findOrNew($input['id']);
        $employee->fill($input)->save();
        $employee->password = ($input['password']) ? Hash::make($input['password']) : $employee->password;
        $employee->reports_to = !empty($input['reports_to'])?array_map('intval', @$input['reports_to']):null;
        $employee->designation_id = $input['roles'];
        $employee->save();
        if (!empty($input['roles'])) {
            $employee->roles()->sync([$input['roles']]);
        }
        return $employee;
    }
}
