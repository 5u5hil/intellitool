<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchedulePlanController extends Controller
{
        //
    
    public function index(){
        return view(config('constants.adminPages').'.schedule-plan.index');
    }
    
    public function add(){
        return view(config('constants.adminPages').'.schedule-plan.add');
    }
}
