<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScheduleController extends Controller
{
    //
    public function index(){
        return view(config('constants.adminPages').'.schedule.index');
    }
}
