<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class set_configuration_controller extends Controller
{

    //function to set configurations and save them to the database
    public function save_configurations(Request $request){
       $settings = new Setting;
       $settings->pesapal_consumer_key = $request->input('pesapal_consumer_key');
       $settings->pesapal_consumer_secret = $request->input('pesapal_consumer_key');
       $settings->maximum_allowed_amount = $request->input('maximum_amout_required');
       $settings->minimum_allowed_amount = $request->input('minimum_amout_required');

       $settings->save();

       return redirect('/home')->with('success','Configurations settings have successfully been Added');
        

    }
}
