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
			'phone-confirm' =>'required',
    	]);
    	Orders::create([
    		'user_id' =>Auth::User()->id,
    		'food_name' =>$request->vegs,
    		'order_category' =>'yes',
			'quantity' =>$request->quantity,
			'price' =>$request->price,
			'delivery_time' =>$request->expected_time,
			'reciept_number' =>'$this->id'
    	]);
    	return view('reciept');
    }
}
