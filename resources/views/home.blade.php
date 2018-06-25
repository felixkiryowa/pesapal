@extends('layouts.app')

@section('content')
    @include('inc.messages')
    <br>
    <br>
    <br>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
		<div class="form_main">
                <h4 class="heading" align="center"><strong>Quick </strong> Set Configurations <span></span></h4>
                <div class="form">
                    <form action="/save_configurations" method="post" id="contactFrm" name="contactFrm">
                         {{csrf_field()}}
                        <input type="text" required="" placeholder="Please input  Pesapal Consumer Key" value="" name="pesapal_consumer_key" class="txt" autofocus>
                        <input type="text" required="" placeholder="Please input Pesapal Consumer Secret" value="" name="pesapal_secret_key" class="txt">
                        <select name="preferred_currency">
                            <option selected>USD</option>
                            <option>UGX</option>
                        </select>
                        <input type="text" required="" placeholder=" Set maximum allowed amount" value="" name="maximum_amout_required" class="txt">
                        <input type="text" required="" placeholder=" Set minimum allowed amount" value="" name="minimum_amout_required" class="txt">
                      
                        <button class="btn btn-success" type="submit"  name="submit">Save</button>
                    </form>
              </div>
            </div>
        </div
    </div>
    <div class="col-md-3"></div>
@endsection
