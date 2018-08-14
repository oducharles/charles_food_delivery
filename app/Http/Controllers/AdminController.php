<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Food;
use App\Orders;
use File;

class AdminController extends Controller
{
    //Make sure you add the a constructor with the Auth tests
	

    public function add_food(Request $request)
    {
    	
    	
    	$this->validate($request, [
    		'food_name' => 'required',
    		'price' => 'required',
    		'food_type' => 'required',
    		'food_photo' => 'required|file|image|mimes:jpeg,png,gif,jpg,webp', //|max:2048',
    	]);

    	$path = Storage::url($request->file('food_photo')->store('public'));
    
    	$store_food = Food::create([
    		'food_name' => $request->food_name,
    		'price' => $request->price,
    		'category' => $request->food_type,
    		'food_photo' => $path,
    	]);
         
    	return redirect()->route('stored_food');
    }

    public function edit_food_detail($id)
    {

    	$edit_food = Food::find($id)->toArray();
    	
    	$foods = DB::select('select * from foods');

    	return view('add_food', compact('foods','edit_food', 'id'));
    }

    public function update_food_details(Request $request, $id)
    {
    	
    	$this->validate($request, [
    		'food_name' => 'required',
    		'price' => 'required',
    		'food_type' => 'required',
    		'food_photo' => 'required | file',
    	]);


    	$new_photo = Storage::url($request->file('food_photo')->store('public'));

    	$save_food_update = Food::find($id)->first();
    	
    	$save_food_update->food_name = $request->food_name;
    	$save_food_update->price = $request->price;
    	$save_food_update->category = $request->food_type;
        unlink(public_path($save_food_update->food_photo));
    	$save_food_update->food_photo = $new_photo;

		$save_food_update->save();    	

    	return redirect()->route('stored_food');

    }

    public function delete_food($id)
    {
    	// $edit_food = Food::where('id','=',$id);
        $edit_food = Food::find($id);
        unlink(public_path($edit_food->food_photo));
        //Storage::del($edit_food->food_photo);
    	$edit_food->delete();

    	return redirect()->route('stored_food');
    }

    public function view_all_orders()
    {
        $query_all_orders = "SELECT orders.food_name,
                                    orders.quantity,
                                    orders.price,
                                    orders.delivery_time,
                                    orders.payment_status,
                                    orders.reciept_number,
                                    orders.delivery_status,
                                    orders.created_at,

                                    concat(customers.first_name,' ',customers.last_name) AS customer

                            FROM orders, users AS customers

                            WHERE user_id = customers.id";
        $all_orders = DB::select($query_all_orders);
        //$total_income = Sum($all_orders->orders.price);
        //dd($total_income);
        return view('all_orders', compact('all_orders'));
    }

    /*//drop-down list function for a select for foods retrieved as in the database
    public function get_foods_select()
    {
    	$foods_to_order = DB::table('foods')->pluck('food_name','price');

    	return view('localfood', compact('foods_to_order'));
    }*/
}
