<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


use App\pesapal_tracker;

class payment_controller extends Controller
{
    //function to save payment
    public function save_payment(Request $request){

         include_once(app_path('Functions\OAuth.php'));

         return view('iframe')->with('iframe_src',$iframe_src);
    }

  //fiunction to save both the transaction reference number and tracking id
    public function payment_status_page(Request $request){
        $reference = $_GET['pesapal_merchant_reference'];
        $pesapal_tracking_id = $_GET['pesapal_transaction_tracking_id'];
  
        $pesapal_tracker = new pesapal_tracker;

        $pesapal_tracker->pesapal_merchant_reference= $reference;
        $pesapal_tracker->pesapal_transaction_tracking_id= $pesapal_tracking_id;

        $pesapal_tracker->save();


      
        return  view('payment_status_page');
    }
}
