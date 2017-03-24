<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Library\Helper;
use Illuminate\Pagination\Paginator;
use DB;
class DesignationLevel extends Model {
    protected $table = 'designation_levels';
    public $timestamps = false;
    public $rules = ['designation' => 'required'];
    protected $fillable = [
        'designation','status','sort_order'
    ];
    
    public static function getSelect(){
        $designationlevel = Self::pluck("designation","id")->toArray();
        return $designationlevel;
    }
    public static function listing() {
        $list = DB::select("select * from designation_levels order by sort_order");
        $list = new Paginator($list, Config('constants.adminPaginateNo'));
        return $list;
    }
    public static function addEdit($id) {
        $designationlevel = self::findOrNew($id);
        $data = ['designationLevel' => $designationlevel];
        return $data;
    }
    public static function saveUpdate($input) {
        $saveUpdateCat = DesignationLevel::findOrNew($input['id']);
        $saveUpdateCat->fill($input)->save();
        return $saveUpdateCat;
    }
}
