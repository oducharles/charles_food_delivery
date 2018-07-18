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

Route::get('/', function () {
    return view('index');
});
Route::get('/localfood', function () {
    return view('localfood');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/pay', function () {
    return view('make_payment');
});
Route::get('/app', function () {
    return view('app');
});
// 
Route::get('/make_payment', 'OrdersController@place_order')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/paid', 'PaidOrderController@save_customer_order');
Route::post('/reciept', function(){
	return view('reciept');
});
