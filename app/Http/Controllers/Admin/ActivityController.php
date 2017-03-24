<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Library\Helper;
use Illuminate\Support\Facades\Input;
use Validator;
use Session;
class ActivityController extends Controller
{
    public function index() { 
        $activities = Activity::listing();
        $data = ['activities' => $activities];
        $viewname = Config('constants.adminPages') . '.activity.index';
        return Helper::returnView($viewname, $data);
    }
    public function addEdit() {
         $data = Activity::addEdit(Input::get('id'));
         $viewname = Config('constants.adminPages') . '.activity.addEdit';
         return Helper::returnView($viewname,$data);
    }
      public function saveUpdate() {
        $activityObj = new Activity();
        $input = Input::all();
        $validator = Validator::make($input, Activity::rules(Input::get('id')), $activityObj->messages)->validate();
        Activity::saveUpdate($input);
        $redirectTo = 'admin.activity.list';
        Session::flash('successMsg', 'Successfully saved.'); 
        return Helper::returnView(null,null, $redirectTo);
        
    }
    
}
