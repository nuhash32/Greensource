@extends('BackEnd.master')
@section('BackEnd')
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
              <li class="breadcrumb-item active">Product Buying Details</li>
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
                <h3 class="card-title">Product Buying Details Form</h3>
              </div>
              <!-- /.card-header -->
              
              <!-- form start -->
              <form action="{{ url('/payment-product') }}" method="POST" class="needs-validation">
                <input type="hidden" value="{{ csrf_token() }}" name="_token" />

                <div class="card-body">
                <div class="row">
            
                    <div class="col-md-12 mb-3">
                        <label for="firstName">Full Name</label>
                        <input type="text" name="name" class="form-control" id="customer_name" 
                        value="{{$editData->name}}"
                               required readonly>
                        <div class="invalid-feedback">
                            Valid customer name is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email"
                    value="{{$editData->email}}" required readonly>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="mobile">Phone</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">+88</span>
                        </div>
                        <input type="text" name="phone" class="form-control" id="mobile" 
                        value="{{$editData->phone}}"
                               required readonly>
                        <div class="invalid-feedback" style="width: 100%;">
                            Your Mobile number is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                  <label for="address">Address</label>
                  <input type="text" name="address" class="form-control" id="address" 
                  value="{{$editData->address}}"
                         required readonly>
                  <div class="invalid-feedback">
                      Please enter your address.
                  </div>
              </div>
              <div class="mb-3">
                <label for="cart_id">Cart ID</label>
                <input type="text" name="cart_id" class="form-control" id="cart_id" 
                value="{{$editData->id}}"
                       required readonly>
                <div class="invalid-feedback">
                    Please enter your quantity.
                </div>
            </div>
              <div class="mb-3">
                <label for="product_name">Product Name</label>
                <input type="text" name="product_name" class="form-control" id="product_name" 
                value="{{$editData->product_name}}"
                       required readonly>
                <div class="invalid-feedback">
                    Please enter your product_name.
                </div>
            </div>

            <div class="mb-3">
                <label for="product_price">Product Price</label>
                <input type="text" name="price" class="form-control" id="product_price" 
                value="{{$editData->price}}"
                       required readonly>
                <div class="invalid-feedback">
                    Please enter your product_price.
                </div>
            </div>

            <div class="mb-3">
                <label for="quantity">Quantity</label>
                <input type="text" name="quantity" class="form-control" id="quantity" 
                value="{{$editData->quantity}}"
                       required readonly>
                <div class="invalid-feedback">
                    Please enter your quantity.
                </div>
            </div>
               
                
            <div class="mb-3">
              <label for="total_amount">Total Amount</label>
              <input type="text" name="amount" class="form-control" id="total_amount" 
              value="{{ $editData['price'] * $editData['quantity']}}"
                     required readonly>
              <div class="invalid-feedback">
                  Please enter your quantity.
              </div>
          </div>
               
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to Payment</button>
            
                
                <!-- Modal CSS in the master blade of BackEnd Panel -->
                
                
                
               







                </div>
            
              </form>




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