<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller {

    public function index() {
        return view(config('constants.adminPages') . '.client.index');
    }

    public function add() {
        return view(config('constants.adminPages') . '.client.addEdit');
    }

}
