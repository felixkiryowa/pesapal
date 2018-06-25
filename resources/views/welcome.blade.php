@extends('inc.app')
  @section('content')
    <div class="jumbotron">
        <h1 align="center">Welcome To PesaPal</h1> 
        <p align="center">Specifically For Administrators</p> 
        <br>
        <br>
         @if (Route::has('login'))
                <div style="padding-left:500px;">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-lg btn-success">Login</a>
                    @endauth
                </div>
         @endif

    </div>
  @endsection