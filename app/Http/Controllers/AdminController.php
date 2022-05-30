<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Hash;
use App\Models\Order; 
use App\Models\User; 

class AdminController extends Controller
{
    /* Admin Donation Status View */


    public function admindonationstatus()
    {
      
        $data['alldata']= Order::where('status','Paid')->get();
       return view('Admin.panel.viewalldonations',$data);
    }


    /* Admin Profile View, Update */
   

    public function admin_view_profile()
    {
        $id =Auth::user()->id;
        $user = User::find($id);
       return view('Admin.panel.adminprofile',compact('user'));

    
    }

    public function admin_update_profile(Request $request){


        $data = User::find(Auth::user()->id);
        $data->name=$request->name;
        $data->address=$request->address;
        $data->contact=$request->contact;
        $data->email=$request->email;
        
        
        $data->save();
        
        return redirect()->route('adminprofile.view');
    
    
    }

    

    public function admin_edit_profile(){

        $id =Auth::user()->id;
        $editdata = User::find($id);
        return view('Admin.panel.admineditprofile',compact('editdata'));
    
    }

     /* Admin Change Password */

    public function adminchangepassword()
    {
        return view('Admin.panel.adminchangepassword');
    }

    public function admin_update_password(Request $request){
        
      $request->validate([
      'old_password'=>'required|min:6|max:100',
      'new_password'=>'required|min:6|max:100',
      'confirm_password'=>'required|same:new_password'
      ]);

      $current_user=auth()->user();

      if(Hash::check($request->old_password,$current_user->password)){

          $current_user->update([
              'password'=>bcrypt($request->new_password)
          ]);

          return back()->with('success','Password Successfully Updated');

      }
      else{
          return back()->with('error','Old Password does not matched');
      }


  }


/* Admin Add Admin, View */



public function add_admin()
{
   
   
    return view('Admin.panel.addadmin');
}

public function admin_store(Request $request)
    {
        $validateData=$request-> validate([
                
                'name'=>'required ',
                'email'=>'required ',
                'is_admin'=>'required ',
                'password'=>'required ',
            ]);   
         
            $data = new User();
            
           
            $data->name=$request->name;
            $data->email=$request->email;
            $data->is_admin=$request->is_admin;
            $data->password=Hash::make($request->password);
          
            
            $data->save();
            return redirect()->route('viewadmin.view');
    }

public function view_admin()
{
  $data= User::where('is_admin',1)->get();
   return view('Admin.panel.viewalladmins',['users'=>$data]);
}
 
public function view_user()
{
  $data= User::where('is_admin',0)->get();
   return view('Admin.panel.viewallusers',['users'=>$data]);
}



}
