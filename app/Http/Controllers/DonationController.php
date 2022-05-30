<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donate_Area; 
use Auth;
use App\Models\Order; 

class DonationController extends Controller
{

     /* User Add Donation, View Donation Status */

    public function donatenow()
    {
       
       $donatearea['donatearea']=donate_area::all();
       
        return view('BackEnd.panel.donatenow',$donatearea);
    }
    
    public function donationstatus()
    {
      $useremail =Auth::user()->email;
      $data['alldata']= Order::where('email',$useremail)
                    ->where('status', 'Paid')
                    ->get();
       return view('BackEnd.panel.donationstatus',$data);

       
    }

    public function donation_store(Request $request)
    {
        $validateData=$request-> validate([
                'name'=>'required ',
                'address'=>'required ',
                'contact'=>'required ',
                'email'=>'required ',
                'donation_amount'=>'required ',
                'donation_area'=>'required ',
            ]);   
         
            $data = new Donation();
            
            $data->name=$request->name;
            $data->address=$request->address;
            $data->contact=$request->contact;
            $data->email=$request->email;
            $data->donation_amount=$request->donation_amount;
            $data->donation_area=$request->donation_area;
          
            
            $data->save();
            return redirect()->route('donationstatus.view');
    }

   
}
