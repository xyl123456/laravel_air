<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends CommonController
{
    public function index (){

    }
    public function quit (){
        session(['user'=>null]);
        return view('admin.login');
    }
}
