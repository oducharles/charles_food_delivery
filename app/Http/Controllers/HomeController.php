<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(User::is_delivery_man()) {
            return view('verify_order');
        }
        
        if(User::is_manager()) {
            return redirect()->route('stored_food');
        }

        return view('index');
    }
}
