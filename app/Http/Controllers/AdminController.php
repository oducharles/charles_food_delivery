<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Food;

class AdminController extends Controller
{
    //Make sure you add the a constructor with the Auth tests


    public function add_food(Request $request)
    {
    	$this->validate($request, [
    		'food_name' => 'required',
    		'price' => 'required',
    		'food_type' => 'required',
    	]);

    	$store_food = Food::create([
    		'food_name' => $request->food_name,
    		'price' => $request->price,
    		'category' => $request->food_type,
    	]);
         
    	return redirect()->route('stored_food');
    }

    public function retrieve_foods()
    {
 
    	$foods = DB::select('select * from foods');
    	
    	return view('add_food', compact('foods'));
    }

    public function get_foods_name()
    {
    	$foods_to_order = DB::table('foods')->pluck('food_name','price');

    	return view('localfood', compact('foods_to_order'));
    }
}
