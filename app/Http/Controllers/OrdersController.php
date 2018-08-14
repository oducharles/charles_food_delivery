<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Food;
use App\Orders;
use App\User;
use Auth;

class OrdersController extends Controller
{

    public function place_order(Request $request)
    {

    	$this->validate($request, [
    		// 'local_food_menu' => 'required',
    		'price' => 'required',
    		'quantity' => 'required',
    		//'meal_time' => 'required',
    		'expected_time' => 'required',
    	]);

        $total_price_of_order = $request->quantity * $request->price;

		$my_orders = [
			'food_name' => $request->get('local_food_menu'),
			'price' =>$total_price_of_order,
			'quantity' =>$request->get('quantity'),
			//'meal_time' =>$request->get('meal_time'),
			'expected_time' =>$request->get('expected_time'),
		];

        $my_info = "SELECT address, phone_number
                    FROM users
                    WHERE id = ".Auth::User()->id."";

        $hold_my_info = DB::select($my_info);

        // $hold_my_info = User::where('id', '=', Auth::User()->id );

        return view('make_payment', compact('my_orders', 'hold_my_info'));
    }

    public function retrieve_all_foods()
    {
        //if(User::is_manager()){
            $foods = DB::select('select * from foods');
        
            return view('add_food', compact('foods'));
        //}
        
    }


    public function retrieve_only_local_foods()
    {
        $foods_to_order = DB::table('foods')->where('category', '=', 'localfood')->get();
        // dd($foods_to_order);
        return view('order_food', compact('foods_to_order'));
    }

     public function retrieve_only_take_away()
    {
        $foods_to_order = DB::table('foods')->where('category', '=', 'takeaway')->get();
        // dd($foods_to_order);
        return view('order_food', compact('foods_to_order'));
    }
/*
    public function get_food_price($id)
    {

        $food_price = Food::find($id);

        return view('localfood.retrieve_only_local_foods', compact('food_price'));
    }*/

}
