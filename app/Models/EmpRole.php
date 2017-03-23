<?php
namespace App\Models;
use Zizaco\Entrust\EntrustRole;
use DB;
use Illuminate\Pagination\Paginator;
class EmpRole extends EntrustRole {
    protected $table = 'emp_roles';
    public $rules = [
        'name' => 'required',
        'designation_level_id' => 'required',
        'verticle_ids' => 'required'
    ];
    protected $casts = [
        'verticals' => 'json'
    ];
    protected $fillable = ['name', 'designation_level_id', 'parent_id', 'system_access'];
    public static function rules($id = null, $merge = []) {
        return array_merge(
                [
            'name' => 'required',
            'designation_level_id' => 'required',
            'vertical_ids' => 'required'
                ], $merge);
    }
    public $messages = [
        'name.required' => 'Designation is required.',
        'designation_level_id.required' => 'Designation Level is required',
        'vertical_ids.required' => 'Vertical is required'
    ];
    public static function listing() {
        $list = DB::select("SELECT e.id,e.name,e.description,e.status,e.sort_order,e.created_at,dl.designation,group_concat(vt.name SEPARATOR ', ') as verticals FROM `emp_roles` e 
left join verticals vt on JSON_CONTAINS(e.verticals->'$[*]', CAST(vt.id as JSON), '$') 
left join designation_levels dl on e.designation_level_id = dl.id
GROUP by e.id");
        $list = new Paginator($list, Config('constants.adminPaginateNo'));
        return $list;
    }
    public static function addEdit($id) {
        $design = self::findOrNew($id);
        $permissions = DB::table("emp_permissions")->get(['id', 'display_name', 'description']);
        $perms = [];
        $i = 0;
        foreach ($permissions as $prmv) {
            $perms[$prmv->description][$i]['perms'] = $prmv->display_name;
            $perms[$prmv->description][$i]['id'] = $prmv->id;
            $i++;
        }
        $desLevel = DesignationLevel::getSelect();
        $designAll = EmpRole::orderBy("name", "asc");
        if (!empty($id))
            $designAll = $designAll->where("id", "!=", $id);
        // $roleArr = $this->buildTree($designAll->get()->toArray());
        $getRepoting = $designAll->pluck('name', 'id');
        $verticlesSel = Vertical::getSelect();
        $data = ['design' => $design, 'permissions' => $perms, 'getRepoting' => $getRepoting, 'desLevel' => $desLevel, 'verticlesSel' => $verticlesSel];
        return $data;
    }
    public static function saveUpdate($input) {
        dd($input);
        $saveRole = self::findOrNew($input['id']);
        $saveRole->fill($input)->save();
        if (!empty($input['chk'])) {
            $saveRole->perms()->sync($input['chk']);
        }
        if (!empty($input['vertical_ids'])) {
            $saveRole->verticals = array_map('intval', $input['vertical_ids']);
            $saveRole->update();
        }
        return $saveRole;
    }
}
