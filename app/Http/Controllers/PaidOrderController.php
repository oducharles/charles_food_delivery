<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    	$order_details = Orders::create([
    		'user_id' =>Auth::User()->id,
    		'food_name' =>$request->food_name,
    		'order_category' =>'yes',
			'quantity' =>$request->quantity,
			'price' =>$request->price,
			'delivery_time' =>$request->expected_time,
			'reciept_number' =>Auth::User()->id
    	]);
    	return view('order_reciept', compact('order_details'));
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

        $order->payment_status = 'paid';
        $order->delivery_status = 'delivered';
        $order->save();

        return view('reciept', compact('order'));
    }
}
