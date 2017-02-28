<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProposalController extends Controller
{
    //
    
    function index(){
        $user = DB::table('test')->first();
        echo "<pre>";
        print_r($user);
        exit;
    }
}
