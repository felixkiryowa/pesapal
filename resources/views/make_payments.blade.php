@extends('inc.app')

@section('content')
   
    <br>
    @include('inc.messages')
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
		<div class="form_main">
                <h4 class="heading" align="center"><strong>PESAPAL </strong>Make Payment <span></span></h4>
                <div class="form">
                    <form action="/save_payment" method="post" id="contactFrm" name="contactFrm">
                         {{csrf_field()}}
                        <input type="text"  placeholder="Please input first name" value="" name="first_name" class="txt" autofocus>
                         @if ($errors->has('first_name'))
                            <span class="help-block">
                                <p style="color:red;">{{ $errors->first('first_name') }}</p>
                            </span>
                        @endif
                        <input type="text"  placeholder="Please input last name" value="" name="last_name" class="txt">
                         @if ($errors->has('last_name'))
                            <span class="help-block">
                                <p style="color:red;">{{ $errors->first('last_name') }}</p>
                            </span>
                        @endif
                        <input type="text"  placeholder="Please input amount" value="" name="amount" class="txt">
                         @if ($errors->has('amount'))
                            <span class="help-block">
                                <p style="color:red;">{{ $errors->first('amount') }}</p>
                            </span>
                        @endif
                        <input type="email"  placeholder="Please input email" value="" name="email" class="txt">
                         @if ($errors->has('email'))
                            <span class="help-block">
                                <p style="color:red;">{{ $errors->first('email') }}</p>
                            </span>
                        @endif
                        <input type="text"  placeholder="Please input phone contact" value="" name="phone_contact" class="txt">
                         @if ($errors->has('phone_contact'))
                            <span class="help-block">
                                <p style="color:red;">{{ $errors->first('phone_contact') }}</p>
                            </span>
                        @endif
                        <textarea type="text" class="txt_3" rows="4" name="description" >
                          
                        </textarea>
                          @if ($errors->has('description'))
                            <span class="help-block">
                                <p style="color:red;">{{ $errors->first('description') }}</p>
                            </span>
                        @endif
                        <br>
                        <br>
                        <button class="btn btn-success" type="submit"  name="submit">make payment</button>
                    </form>
              </div>
            </div>
        </div
    </div>
    <div class="col-md-3"></div>
@endsection
