<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Order;  
use App\Models\User; 
use Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */


      /* User Dashboard Panel */


    public function index()
    {
        

    $checkemail =Auth::user()->email;
    $no_of_donations = Order::where('email',$checkemail)
                       ->where('status', 'Paid')
                       ->get() ->count();
    
    $useremail =Auth::user()->email;
    $total_amount= Order::where('email',$useremail)
                  ->where('status', 'Paid')
                  ->get()->sum('amount');

        return view('BackEnd.panel.home', compact('no_of_donations','total_amount'));
    }

     /* Admin Dashboard Panel */


    public function adminHome()
    {
       
        $total_users= User::where('is_admin', '0')->get()->count();
        $total_admins= User::where('is_admin', '1')->get()->count();
        $total_donations= Order::where('status', 'Paid')->get()->count();
        $total_donation_amount= Order::where('status', 'Paid')->get()->sum('amount');

        return view('Admin.panel.adminhome', compact('total_users','total_admins','total_donations','total_donation_amount'));
    }
}
