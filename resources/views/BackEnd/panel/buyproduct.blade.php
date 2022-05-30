@extends('BackEnd.master')
@section('BackEnd')
<style>
  .card-img-top {
    width: 100%;
    height: 25vw;
    object-fit: cover;
}

    
    </style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Product</a></li>
              <li class="breadcrumb-item active">Buy Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         
          <div class="col-md-12">
           
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Buy Product</h3>
              </div>
              <div class="row" style="text-align: center">
              @foreach ($alldata as $key => $products)
             
              <div class="col-4">
                  
                 <div class="card" style="width: 100%;">
                  
                    <img  class="card-img-top" src="{{ asset('upload/product_images/'.$products->image)}}" width="100px";>
                    <div class="card-body">
                    <h4><b>{{ $products->name }}</b></h4>
                    <h4 class="price" style="font-family: 'Consolas'; color:green;">৳ {{ $products->price }}</h4>
                   
                    <h6 class="availability" style="font-family: 'Consolas'; color:blue;">{{ $products->availability}}({{ $products->stock}})</h6>
                    <div class="card-footer">


                       <form action="{{route('addcart.view',$products->id)}}" method="POST">
                         @csrf
                         <div class="mb-3" style="text-align: center">
                          <label for="quantity">Quantity</label>
                         <input type="number" value="1" min="1" max="{{ $products->stock}}" class="form-control" style="width: 100px" name="quantity">
                         </div>
                         <br>
                         <input class="btn btn-primary" type="submit" value="Add to Cart">

                       </form>
                      </div>
                    
                    </div>
         
                  </div>
              </div>
              @endforeach
              
            </div>

            </div>
           
          </div>
          
        </div>
       
      </div>
    </section>
   
  </div>

  @endsection