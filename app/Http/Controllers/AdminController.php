<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    	return view('add_food');
    }

    public function retrieve_foods()
    {
 
    	$food = Food::with('food_name')->get();
    	dd($food);
    }
}
