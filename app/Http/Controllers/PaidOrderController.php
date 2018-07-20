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

    	Orders::create([
    		'user_id' =>Auth::User()->id,
    		'food_name' =>$request->food_name,
    		'order_category' =>'yes',
			'quantity' =>$request->quantity,
			'price' =>$request->price,
			'delivery_time' =>$request->expected_time,
			'reciept_number' =>Auth::User()->id
    	]);

    	return view('reciept');
    }

    public function checkboxes(Request $request)
    {
        dd($request->all());
    }

    public function verify_order(Request $request)
    {
        $this->validate($request, [
            'reciept_number' => 'required'
        ]);

        $verify_reciept_number = $request->get('reciept_number');

        $status_update = DB::table('orders')
                                        ->where('reciept_number', $verify_reciept_number)
                                        ->update([
                                            'payment_status' => 'paid',
                                            'delivery_status' => 'delivered'
                                            ]);
        
        return view('home', compact('hold_checked_order'));
    }

    public function retrieve_order_details()
    {
        /*$retrieve_order = "SELECT *
                        FROM orders
                        WHERE reciept_number = ".$this->verify_order()->$verify_reciept_number."";

        $hold_retrieve_order = DB::select($retrieve_order);*/

        /*foreach ($hold_checked_order as $held) {
            $change_statuses = [
                $held->payment_status = 'paid',
                $held->delivery_status = 'delivered',
                ];
            
            dd($change_statuses);
        }*/
    }
}
