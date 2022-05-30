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
              <li class="breadcrumb-item active">Edit Cart</li>
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
                <h3 class="card-title">Edit Cart</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
                <form action="{{route('cart.update',$editData->id)}}" method="POST">
                @csrf
                <div class="card-body">

                      <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" name="product_name" class="form-control"  value="{{$editData->product_name}}" readonly >
                      </div>
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control"  value="{{$editData->price}}"  readonly >
                      </div>
                      <div class="form-group">
                        <label for="quantity">Quantity</label>
                       <input type="number" value="{{$editData->quantity}}" min="1" class="form-control" style="width: 100px" name="quantity">
                       </div>
                      
            
            
                     
                 
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" value="Update Cart" class="btn btn-primary">
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