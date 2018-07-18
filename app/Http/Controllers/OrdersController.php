<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;

class OrdersController extends Controller
{
    public function place_order(Request $request)
    {

    	$this->validate($request, [
    		'localfood' => 'required',
    		'price' => 'required',
    		'quantity' => 'required',
    		'delivery_time' => 'required',
    		'expected_time' => 'required',
    	]);

    	// dd($request->all());<!-- {{ dd($my_orders['expected_time']) }} -->

		$my_orders = [
			'food_name' => $request->get('vegs'),
			'price' =>$request->get('price'),
			'quantity' =>$request->get('quantity'),
			'delivery_time' =>$request->get('delivery_time'),
			'expected_time' =>$request->get('expected_time'),
			// 'reciept_number' =>"str_rand(8)"
		];
        // dd($my_orders);
        return view('make_payment', compact('my_orders'));
    }
}
