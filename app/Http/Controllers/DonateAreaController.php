<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donate_Area;  

class DonateAreaController extends Controller
{

     /* Admin Add, Update, Delete Donate Area */


    public function add_donate_area()
    {
       
        return view('Admin.panel.adddonatearea');
    }

    public function donate_area_status()
    {
        $data['alldata'] = donate_area::all();
       
        return view('Admin.panel.donationareastatus',$data);
    }

    public function donate_area_store(Request $request)
    {
        $validateData=$request-> validate([
                
                'donate_area'=>'required ',
            ]);   
         
            $data = new Donate_Area();
            
           
            $data->donate_area=$request->donate_area;
          
            
            $data->save();
            return redirect()->route('donationareastatus.view');
    }


    public function donate_area_edit($id){
        $editData = Donate_Area::find($id);
        return view('Admin.panel.editdonatearea',compact('editData'));

    }


    public function donate_area_update(Request $request,$id){

    $data = Donate_Area::find($id);
    $data->donate_area=$request->donate_area;
    
    $data->save();
    
    $notification = array(
    
        'message' => 'Donate Area Updated Successfully',
        'alert-type' => 'success'
    
    );
    
    
    return redirect()->route('donationareastatus.view')->with($notification);


}


public function donate_area_delete($id){

$data = Donate_Area::find($id);
$data-> delete();


$notification = array(
    
    'message' => 'Donate Area Deleted Successfully',
    'alert-type' => 'success'

);

return redirect()->route('donationareastatus.view')->with($notification);

}

}
