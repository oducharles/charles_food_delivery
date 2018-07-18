<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use Auth;

class PaidOrderController extends Controller
{
    public function save_customer_order(Request $request)
    {
    	$this->validate($request, [
    		'address' =>'required',
			'password_confirmation' =>'required',
    	]);
    	Orders::create([
    		'user_id' =>1,//Auth::User()->id,
    		'food_name' =>$request->vegs,
    		'order_category' =>'yes',
			'quantity' =>$request->quantity,
			'price' =>$request->price,
			'delivery_time' =>$request->expected_time,
			'reciept_number' =>"str_rand(8)"
    	]);
    	return view('reciept');
    }
}
