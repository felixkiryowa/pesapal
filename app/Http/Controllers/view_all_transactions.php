<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class view_all_transactions extends Controller
{
    //function to load view for viewing all transactions by the administrator
    public function view_trasactions(){
        return view ('view_all_transactions');
    }
}
