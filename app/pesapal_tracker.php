<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesapal_tracker extends Model
{
     protected $fillable = ['pesapal_merchant_reference', 'pesapal_transaction_tracking_id'];
}
