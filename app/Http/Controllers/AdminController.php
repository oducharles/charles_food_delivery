<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Food;
use Storage;
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
    		'food_photo' => 'required | file',
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

    	$save_food_update = Food::where('id','=',$id)->first();
    	
    	$save_food_update->food_name = $request->food_name;
    	$save_food_update->price = $request->price;
    	$save_food_update->category = $request->food_type;
    	$save_food_update->food_photo = $new_photo;

		$save_food_update->save();    	

    	return redirect()->route('stored_food');

    }

    public function delete_food($id)
    {
    	$edit_food = Food::where('id','=',$id);
    	$edit_food->delete();
    	// File::delete($edit_food);

    	return redirect()->route('stored_food');
    }



    /*//drop-down list function for a select for foods retrieved as in the database
    public function get_foods_select()
    {
    	$foods_to_order = DB::table('foods')->pluck('food_name','price');

    	return view('localfood', compact('foods_to_order'));
    }*/
}
