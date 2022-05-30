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
              <li class="breadcrumb-item active">Admin View Profile</li>
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
                <h3 class="card-title">Admin Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <!-- Profile Image -->
         
                <div class="card-body box-profile">
                  <div class="text-center">
                    
                         <i class="fas fa-user-circle fa-lg"></i>
                  </div>
  
                <h3 class="profile-username text-center">{{$user->name}}</h3>
               
                 
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Full Name</b> <a class="float-right">{{$user->name}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Address</b> <a class="float-right">{{$user->address}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Contact No</b> <a class="float-right">{{$user->contact}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Email Address</b> <a class="float-right">{{$user->email}}</a>
                      </li>
                  </ul>
  
                  <a href="{{route('admin_edit_profile.view')}}" class="btn btn-primary btn-block"><b>Update Profile</b></a>
                </div>
                <!-- /.card-body -->
             
              <!-- /.card -->


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