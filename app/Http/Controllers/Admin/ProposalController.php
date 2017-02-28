<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProposalController extends Controller {

    //

    function index() {
        return view(config('constants.adminPages') . '.proposal.index');
    }
    
    function add(){
        return view(config('constants.adminPages').'.proposal.add');
    }

}
