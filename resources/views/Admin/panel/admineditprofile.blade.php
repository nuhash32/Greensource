@extends('Admin.master')
@section('Admin')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin Profile</a></li>
              <li class="breadcrumb-item active">Admin Edit Profile</li>
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
                <h3 class="card-title">Admin Edit Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <form method="post" action="{{route('admin_update.profile')}}">
                  @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" name="name" class="form-control" id="fullname" placeholder="Enter Full Name" 
                        value="{{$editdata->name}}">
                      </div>
                      <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address"value="{{$editdata->address}}">
                      </div>
                      <div class="form-group">
                        <label for="contactno">Contact No</label>
                        <input type="text" name="contact" class="form-control" id="contactno" placeholder="Enter Contact No"value="{{$editdata->contact}}">
                      </div>
                  <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email Address" value="{{$editdata->email}}">
                  </div>
                 
                
                 
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
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