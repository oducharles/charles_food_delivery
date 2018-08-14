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

Route::get('/', function (){
	return view('index');
}); //index page

//verify orders by deliveryman
Route::get('/verify', function (){
return view('verify_order');
});

Route::get('/admin_home', function (){
return view('admin_home');
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

//my suggested empty template to be used
Route::get('/app', function () {
    return view('app');
});

//After placing an order
Route::get('/make_payment', 'OrdersController@place_order')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//local food menu
Route::get('/localfood', 'OrdersController@retrieve_only_local_foods')->name('localfood');
Route::get('/take_away', 'OrdersController@retrieve_only_take_away')->name('take_away');

Route::get('/food_price/{id}', 'OrdersController@get_food_price')->name('food_price');

Route::get('/checked', 'PaidOrderController@verify_order')->name('checked');

Route::post('/paid', 'PaidOrderController@save_customer_order');

Route::get('/my_reciept', 'PaidOrderController@retrieve_order')->name('my_reciept');

Route::get('/reciept', 'PaidOrderController@retrieve_order_details')->name('reciept');

Route::post('/store_food', 'AdminController@add_food');//for admin to add food

Route::get('/add_food', 'OrdersController@retrieve_all_foods')->name('add_food');

Route::get('/stored_food', 'OrdersController@retrieve_all_foods')->name('stored_food');

Route::get('/edit_food/{id}', 'AdminController@edit_food_detail')->name('edit_food');

Route::post('/store_food_update/{id}', 'AdminController@update_food_details')->name('store_food_update');

Route::post('/delete_food/{id}', 'AdminController@delete_food')->name('delete_food');

Route::post('/view_all_orders', 'AdminController@view_all_orders')->name('view_all_orders');

Route::get('/view_all_orders', 'AdminController@view_all_orders')->name('view_all_orders');


