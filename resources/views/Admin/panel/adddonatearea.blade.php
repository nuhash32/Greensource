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
              <li class="breadcrumb-item"><a href="#">Donation</a></li>
              <li class="breadcrumb-item active">Add Donate Area</li>
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
                <h3 class="card-title">Add Donation Area</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('donate_area.store')}}">
              @csrf
                <div class="card-body">

                 
                  <div class="form-group">
                        <label for="fullname">Donation Area</label>
                        <input type="text" name="donate_area" class="form-control"  value="">
                      </div>
                     
                 
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" value="Add Donate Area" class="btn btn-primary">
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