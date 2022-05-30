<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product; 
use App\Models\Cart; 
use App\Models\Sale; 
class ProductController extends Controller
{
    public function ProductView(){

        $data['alldata'] = product::all();
        return view('Admin.panel.viewproduct',$data);
    
    }

    public function ProductAdd(){

       

        return  view('Admin.panel.addproduct');
        
        }



        public function ProductStore(Request $request){

            $validateData=$request-> validate([

            'image'=>'nullable',
             'name'=>'required ',
             'price'=>'required',
             'availability'=>'required ',
             'stock'=>'required',

         
         
         ]);   
         
          $data = new Product();
         
         $data->name=$request->name;
        
         $data->price=$request->price;
        
         $data->availability=$request->availability;
        
         $data->stock=$request->stock;

               
        if($request->file('image')){
        
        
            $file = $request->file('image');
            @unlink(public_path('upload/product_images/'.$data->image));
        
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/product_images'),$filename);
            $data['image']=$filename;
        
        }
         
         $data->save();
         
        
         
         
         
         return redirect()->route('product.view');
         
         
         
             }
         
             public function ProductEdit($id){


              
                $editData = Product::find($id);

               return view('Admin.panel.editproduct',compact('editData'));
 
        
            }


             public function ProductUpdate(Request $request,$id){


                $data = Product::find($id);
                $data->name=$request->name;
                $data->price=$request->price;
                $data->availability=$request->availability;
                $data->stock=(($request->stock+$request->stock_in)-$request->stock_out);
                $data->stock_in=$request->stock_in;
                $data->stock_out=$request->stock_out;

                if($request->file('image')){
        
                    $file = $request->file('image');
                    @unlink(public_path('upload/product_images/'.$data->image));
                
                    $filename=date('YmdHi').$file->getClientOriginalName();
                    $file->move(public_path('upload/product_images'),$filename);
                    $data['image']=$filename;
                
                }
                
                $data->save();
                
                $notification = array(
                
                    'message' => 'Product Data Updated Successfully',
                    'alert-type' => 'success'
                
                );
                
                return redirect()->route('product.view')->with($notification);
            
            
            }
            

    public function ProductDelete($id){

        $products = Product::find($id);
        $products-> delete();
        
        $notification = array(
            
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'success'
        
        );
        
        return redirect()->route('product.view')->with($notification);
        
        
        }

        public function confirmproducts()
{
  
    $data['alldata']= Sale::where('status','Paid')->get();
   return view('Admin.panel.confirmproducts',$data);
}


        public function BuyProduct(){

            $data['alldata'] = product::all();
            return view('BackEnd.panel.buyproduct',$data);
        
        }
        public function BuyDetails($id){
            
            $editData = Product::find($id);
         
            return view('BackEnd.panel.buyingform',compact('editData'));
        
        }

        public function addcart(Request $request,$id){
            
          $user=auth()->user();
          $product=Product::find($id);
          $cart=new cart;
          $cart->name=$user->name;
          $cart->email=$user->email;
          $cart->phone=$user->contact;
          $cart->address=$user->address;
          $cart->product_name=$product->name;
          $cart->price=$product->price;
          $cart->quantity=$request->quantity;

          $cart->save();
         
          return redirect()->route('show.cart');
        
        }

        public function showcart(){

            $useremail =Auth::user()->email;
            $data['alldata']= Cart::where('email',$useremail)
                          ->get();

            $sdata['saledata'] = Sale::all();
          
            return view('BackEnd.panel.showcart',$data,$sdata);
        
        }


        public function cart_edit($id){
            $editData = Cart::find($id);
            return view('BackEnd.panel.editcart',compact('editData'));
    
        }
    
    
        public function cart_update(Request $request,$id){
    
        $data = Cart::find($id);
       
        $data->product_name=$request->product_name;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->save();
        
        $notification = array(
        
            'message' => 'Cart Updated Successfully',
            'alert-type' => 'success'
        
        );
        
        
        return redirect()->route('show.cart')->with($notification);
    
    
    }
    
    
    public function cart_delete($id){
    
    $data = Cart::find($id);
    $data-> delete();
    
    
    $notification = array(
        
        'message' => 'Cart Deleted Successfully',
        'alert-type' => 'success'
    
    );
    
    return redirect()->route('show.cart')->with($notification);
    
    }


    public function product_payment_info($id){
            
        $editData = Cart::find($id);
     
        return view('BackEnd.panel.productpaymentinfo',compact('editData'));
    
    }
    public function productstatus()
    {
      $useremail =Auth::user()->email;
      $data['alldata']= Sale::where('email',$useremail)
                    ->where('status', 'Paid')
                    ->get();
       return view('BackEnd.panel.productstatus',$data);

       
    }
    public function manage_cart($id){
        $editData = Cart::find($id);
        return view('Admin.panel.managecart',compact('editData'));

    }
    public function manage_cart_update(Request $request,$id){
    
        $data = Cart::find($id);
       
        $data->status=$request->status;
       
        $data->save();
        
        $notification = array(
        
            'message' => 'Cart Updated Successfully',
            'alert-type' => 'success'
        
        );
        
        
        return redirect()->route('view.cart')->with($notification);
    
    
    }
    public function viewcart(){

        $data['alldata'] = Cart::all();
        return view('Admin.panel.viewcart',$data);
    
    }



}
