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
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Add Admin</li>
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
                <h3 class="card-title">Add Admin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              
              <form method="POST" action="{{ route('admin.store') }}">

                @csrf
    
                <div class="card-body">
    
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter Name" size="20">
                  </div>
              
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus autocomplete="email" placeholder="Enter Email">
                      </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Admin Status</label>
                          <input type="text" class="form-control" id="status" name="is_admin"  value="1" readonly>
                        </div>
                      </div>
                  
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Password</label>
                          <input type="password" class="form-control" id="password"  name="password" required autocomplete="new-password" placeholder="Enter Password">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="phone">Confirm Password</label>
                          <input type="password" class="form-control" id="password_confirmation"  name="password_confirmation" required
                          autocomplete="new-password" placeholder="Confirm Password">
                        </div>
                      </div>
        
                      <div class="button-create-account">
    
                        <input type="submit" value="Add Admin" class="btn btn-primary">
    </div>
                   

                    </div>
                   
                   
                   
                  </div>




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