<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Orders;
use App\Users;

class OrdersController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('auth');;
    // }

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
        $my_info = "SELECT address, phone_number
                    FROM users
                    WHERE id = 2";
                    // [
                    //     'address'=> $request->get('address'),
                    //     'phone_number'=> $request->get('phone_number'),
                    // ];
                    
        $hold_my_info = DB::select($my_info);
        // dd($hold_my_info);
        return view('make_payment', compact('my_orders','hold_my_info'));
    }
}
