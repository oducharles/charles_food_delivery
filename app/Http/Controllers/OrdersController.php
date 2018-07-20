<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Orders;
use App\Users;
use Auth;

class OrdersController extends Controller
{
    public function order_type()
    {
        $my_food = "SELECT order_type, food_photo
                    FROM ordercategorgies
                    WHERE id = 28";
        $hold_my_food = DB::select($my_food);
        return view('index', compact('hold_my_food'));
    }

    public function place_order(Request $request)
    {

    	$this->validate($request, [
    		'local_food_menu' => 'required',
    		'price' => 'required',
    		'quantity' => 'required',
    		'meal_time' => 'required',
    		'expected_time' => 'required',
    	]);

		$my_orders = [
			'food_name' => $request->get('local_food_menu'),
			'price' =>$request->get('price'),
			'quantity' =>$request->get('quantity'),
			'meal_time' =>$request->get('meal_time'),
			'expected_time' =>$request->get('expected_time'),
		];

        $my_info = "SELECT address, phone_number
                    FROM users
                    WHERE id = ".Auth::User()->id."";
                    
        $hold_my_info = DB::select($my_info);
        return view('make_payment', compact('my_orders', 'hold_my_info'));
    }

}
