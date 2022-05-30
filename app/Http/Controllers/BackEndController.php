<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use App\Models\Donate_Area; 
use App\Models\User;  
use App\Models\Order;  
use Auth;



class BackEndController extends Controller
{

    /* User Profile View, Update */
   

    public function view_profile()
    {
        $id =Auth::user()->id;
        $user = User::find($id);
       return view('BackEnd.panel.profile',compact('user'));

    
    }

    public function edit_profile(){

        $id =Auth::user()->id;
        $editdata = User::find($id);
        return view('BackEnd.panel.editprofile',compact('editdata'));
    
    
    }
    
    
      public function update_profile(Request $request){
    
        $data = User::find(Auth::user()->id);
        $data->name=$request->name;
        $data->address=$request->address;
        $data->contact=$request->contact;
        $data->email=$request->email;
        
        
        $data->save();
        return redirect()->route('profile.view');
    
    
    
    }

     /* User Change Update Password */

    public function changepassword()
    {return view('BackEnd.panel.changepassword');
    }
    public function update_password(Request $request){
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


  

}
