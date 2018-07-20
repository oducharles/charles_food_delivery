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

Route::get('/', 'OrdersController@order_type'); //index page

//local food menu
Route::get('/localfood', function () {
    return view('localfood');
});

//verify orders by deliveryman
Route::get('/verify', function () {
    return view('verify_order');
});

//strat of radio button and checkboxes exercises
Route::get('/radio', function () {
    return view('radio_checkbox');
});
Route::get('/new_radio', function () {
    return view('new_radio_checkbox');
});
Route::get('/radio_checkbox', 'PaidOrderController@checkboxes');
Route::get('/new_radio_checkbox', 'PaidOrderController@checkboxes');
//end of radio buttn and checkboxes exercise

//register link on login page
Route::get('/register', function () {
    return view('register');
});
/*Route::get('/pay', function () {
    return view('make_payment');
});*/

//my suggested empty template to be used
Route::get('/app', function () {
    return view('app');
});

//After placing an order
Route::get('/make_payment', 'OrdersController@place_order')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/checked', 'PaidOrderController@verify_order')->name('checked');

Route::post('/paid', 'PaidOrderController@save_customer_order');
Route::post('/reciept', function(){
	return view('reciept');
});

