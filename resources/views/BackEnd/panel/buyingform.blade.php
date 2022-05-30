@extends('BackEnd.master')
@section('BackEnd')
@php
    $userid =Auth::user()->id;

$userdata= DB::table('users')->where('id',$userid)->get();
@endphp

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Products</a></li>
              <li class="breadcrumb-item active">Buying Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Buying Details Form</h3>
              </div>
              <!-- /.card-header -->
              @foreach ($userdata as  $udata)
              <!-- form start -->
              <form action="{{ url('/pay') }}" method="POST" class="needs-validation">
                <input type="hidden" value="{{ csrf_token() }}" name="_token" />

                <div class="card-body">
                <div class="row">
            
                    <div class="col-md-12 mb-3">
                        <label for="firstName">Full Name</label>
                        <input type="text" name="name" class="form-control" id="customer_name" 
                        value="{{$udata->name}}"
                        readonly  required>
                        <div class="invalid-feedback">
                            Valid customer name is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="mobile">Mobile Number</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">+88</span>
                        </div>
                        <input type="text" name="phone" class="form-control" id="mobile" 
                        value="{{$udata->contact}}"
                        readonly  required>
                        <div class="invalid-feedback" style="width: 100%;">
                            Your Mobile number is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email (Same as Profile Email)</label>
                    <input type="email" name="email" class="form-control" id="email"
                    value="{{$udata->email}}" readonly required>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>

                <div class="mb-3">
                  <label for="address">Address</label>
                  <input type="text" name="address" class="form-control" id="address" 
                  value="{{$udata->address}}"
                  readonly required>
                  <div class="invalid-feedback">
                      Please enter your address.
                  </div>
              </div>

              <div class="mb-3">
                <label for="productname">Product Name</label>
                <input type="text" name="product_name" class="form-control" id="product_name" 
                value="{{$editData->name}}" readonly 
                readonly required>
                <div class="invalid-feedback">
                    Please enter your the product name
                </div>
            </div>
            <div class="mb-3">
                <label for="productname">Product Per Price</label>
                <input type="text" name="product_per_price" class="form-control" id="product_per_price" 
                value="{{$editData->price}}"
                readonly required>
                <div class="invalid-feedback">
                    Please enter your the product price
                </div>
            </div>
            <div class="mb-3">
                <label for="quantity">Quantity</label>
                <input type="text" name="quantity" class="form-control" id="quantity" 
                value=""
                       required>
                <div class="invalid-feedback">
                    Please enter your the product quantity
                </div>
            </div>
                <div class="mb-3">
                    <label for="text">Total Amount <span class="text-muted"></span></label>
                    <input type="text" name="amount" class="form-control" id="total_amount"
                           placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Please enter a valid amount.
                    </div>
                </div>
                
               
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit"><a href="#" style="color: white;">Continue to Payment</a></button>
            
        



                </div>
            
              </form>


              @endforeach

            </div>
            <!-- /.card -->


          </div>
          
         
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection