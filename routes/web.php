<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/admin', function () {
    return view('welcome');
});

//route to logout admin
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 });

Auth::routes();
//route to load the first page when the applicarion is loaded
Route::get('/','users_controller@index');
//route to go to the users payment page
Route::get('/make_payments','users_controller@make_payments');
//route to help you perform payment
Route::post('/save_payment','payment_controller@save_payment');
//route to call back page after processing payments
Route::get('/payment_status_page','payment_controller@payment_status_page');
//route to show the admin dashboard
Route::get('/home', 'HomeController@index')->name('home');
//route to the page where the admin view all the performed transactions
Route::get('/all_transactions','view_all_transactions@view_trasactions');
//routet save all configuration settings
Route::post('/save_configurations','set_configuration_controller@save_configurations')->name('save_configurations');
