<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function getAdmin(){
        return view('Admin.layout.index');
    }
}
