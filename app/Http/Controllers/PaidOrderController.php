<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Orders;
use Auth;

class PaidOrderController extends Controller
{
    public function save_customer_order(Request $request)
    {
    	$this->validate($request, [
    		'address' =>'required',
			'phone_confirm' =>'required',
    	]);

        // dd($request->all());
    	$order_details = Orders::create([
    		'user_id' =>Auth::User()->id,
    		'food_name' =>$request->food_name,
			'quantity' =>$request->quantity,
			'price' =>$request->price,
			'delivery_time' =>$request->expected_time,
			'reciept_number' =>str_random(10),
    	]);

        $order_user = User::where('id', '=', Auth::User()->id )->first();

        $order_user->address = $request->address;
        $order_user->phone_number = $request->phone_confirm;

        $order_user->save();

    	return view('order_reciept', compact('order_details','order_user'))->with('success', 'Thank you for ordering');
    }

    public function checkboxes(Request $request)
    {
        dd($request->all());
    }

    public function verify_order(Request $request)
    {
            
            $this->validate($request, [
            'reciept_number' => 'required | exists:orders'
            ]);

            $order = Orders::where('reciept_number', '=', $request->reciept_number )->first();

            $order_user = User::where('id', '=', $order->user_id )->first();

            $order->payment_status = 'paid';
            $order->delivery_status = 'delivered';
            $order->save();

            return view('reciept', compact('order', 'order_user'));
        
    }

    public function retrieve_order()
    {
        $order_user = User::where('id', '=', Auth::User()->id )->first();
        $order_details = Orders::where('user_id', '=', Auth::User()->id )->first();

        return view('order_reciept', compact('order_user', 'order_details'));
    }

}
