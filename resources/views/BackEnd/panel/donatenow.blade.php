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
              <li class="breadcrumb-item"><a href="#">Donation</a></li>
              <li class="breadcrumb-item active">Donation Now</li>
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
                <h3 class="card-title">Donation Form</h3>
              </div>
           
              @foreach ($userdata as  $udata)
           

              <form action="{{ url('/pay') }}" method="POST" class="needs-validation">
                <input type="hidden" value="{{ csrf_token() }}" name="_token" />

                <div class="card-body">
                <div class="row">
            
                    <div class="col-md-12 mb-3">
                        <label for="firstName">Full Name</label>
                        <input type="text" name="name" class="form-control" id="customer_name" 
                        value="{{$udata->name}}"
                               required readonly>
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
                               required readonly>
                        <div class="invalid-feedback" style="width: 100%;">
                            Your Mobile number is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email (Same as Profile Email)</label>
                    <input type="email" name="email" class="form-control" id="email"
                    value="{{$udata->email}}" required readonly>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>

                <div class="mb-3">
                  <label for="address">Address</label>
                  <input type="text" name="address" class="form-control" id="address" 
                  value="{{$udata->address}}"
                         required readonly>
                  <div class="invalid-feedback">
                      Please enter your address.
                  </div>
              </div>

                <div class="mb-3">
                  <label for="donationarea">Donation Area</label>
                   
                  
                  <div class="controls">
                    <select name="donate_area" class="form-control" required="true"
                        aria-invalid="false">

                        <option value="" selected="" disabled="">Select Donation Area</option>

                        @foreach ($donatearea as $key => $donate_areas)
                        <option value= "{{ $donate_areas->donate_area }}">{{ $donate_areas->donate_area }}</option>
                        @endforeach

                    </select>
                </div>
                </div>

                <div class="mb-3">
                    <label for="text">Donation Amount <span class="text-muted"></span></label>
                    <input type="text" name="amount" class="form-control" id="total_amount"
                           placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Please enter a valid donation amount.
                    </div>
                </div>
                
               
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit"><a href="#open-modal" style="color: white;">Continue to Payment</a></button>
            
                
                <!-- Modal CSS in the master blade of BackEnd Panel -->
                
                
                
                <div id="open-modal" class="modal-window">
                  <div style="text-align: center ;">

                <a href="#modal-close" title="Close" class="modal-close">
                   <img src="{{ asset('front/img/banking/cross.png') }}" alt="" style="height: 30px; width: 30px;">
                   </a>
    
                <h1 style=" font-family: Bahnschrift SemiBold;">Donation Confirmation</h1><br>
                <div style="font-family: Bahnschrift SemiBold; text-alig">
                  
                   <form action="{{ url('/pay') }}" method="POST">
                    <button class="btn btn-primary btn-sm " type="submit" value="Submit"  style="color: black; background-color:white">Confirm Payment</button><br><br>
                    <button class="btn btn-primary btn-sm " type="submit"  style=" background-color:white"><a href="{{route('dashboard')}}" style="color: black;">Cancel Payment</a></button>
                   
                    </form> 

                    @endforeach

                </div>

          </div>
       </div>







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