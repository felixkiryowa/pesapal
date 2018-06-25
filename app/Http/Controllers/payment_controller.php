<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


use App\pesapal_tracker;

use DB;

class payment_controller extends Controller
{
    //function to save payment
    public function save_payment(Request $request){
        $get_maximum_amount = DB::table('settings')->where('id',1)->value('maximum_allowed_amount');
        $get_minimum_amount = DB::table('settings')->where('id',1)->value('minimum_allowed_amount');
        $amount = (int)$request->input('amount');
        if($amount < $get_minimum_amount){
             return redirect('/make_payments')->with('error','The amount entered is greater than the maximum amount accepted to transact');
        }
        elseif($amount > $get_maximum_amount){
             
               return redirect('/make_payments')->with('error','The amount entered is greater than the maximum amount accepted to transact');
        }else{
            
             include_once(app_path('Functions\OAuth.php'));

             return view('iframe')->with('iframe_src',$iframe_src);
        }
      


         
    }

  //fiunction to save both the transaction reference number and tracking id
    public function payment_status_page(Request $request){
        $reference = $_GET['pesapal_merchant_reference'];
        $pesapal_tracking_id = $_GET['pesapal_transaction_tracking_id'];
  
        $pesapal_tracker = new pesapal_tracker;

        $pesapal_tracker->pesapal_merchant_reference= $reference;
        $pesapal_tracker->pesapal_transaction_tracking_id= $pesapal_tracking_id;



        $pesapal_tracker->save();


        include_once(app_path('Functions\Pesapal-ipn-listener.php'));
        return  $resp;
        //view('payment_status_page');
    }
}
