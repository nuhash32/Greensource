@extends('Admin.master')
@section('Admin')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
          <div class="col-sm-6">

            @if(session('success'))
            <div class="alert alert-success" role="alert">
              {{session("success")}}
            </div>
            @endif
          
            @if(session('error'))
            <div class="alert alert-danger" role="alert">
              {{session("error")}}
            </div>
            @endif

          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin Profile</a></li>
              <li class="breadcrumb-item active">Admin Change Password</li>
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
                <h3 class="card-title">Admin Change Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
	 
                <form action="{{route('admin_update_password')}}" id="change_password_form" method="post">
                 @csrf
                  <div class="form-group">
                 <label for="old_password">Old Password</label>
                 <input type="password" name="old_password" class="form-control" id="old_password" >
               
                 @if($errors->any('old_password'))
                   <span class="text-danger">{{$errors->first('old_password')}}</span>
                 @endif
                 </div>
                 <div class="form-group">
                 <label for="password">New Password</label>
                 <input type="password" name="new_password" class="form-control" id="new_password" >
                 @if($errors->any('new_password'))
                   <span class="text-danger">{{$errors->first('new_password')}}</span>
                 @endif
                 </div>
                 <div class="form-group">
                 <label for="confirm_password">Confirm Password</label>
                 <input type="password" name="confirm_password" class="form-control" id="confirm_password" >
                 @if($errors->any('confirm_password'))
                   <span class="text-danger">{{$errors->first('confirm_password')}}</span>
                 @endif
                 </div>
             
                 <button type="submit" class="btn btn-primary">Update Password</button>
               </form>
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