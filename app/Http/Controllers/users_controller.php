<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class users_controller extends Controller
{
    //function to load view for normal application users
    public function index(){
        return view ('users_welcome');
    }


    //function to display users payments page
    public function make_payments(){
        return view('make_payments');
    }
}
