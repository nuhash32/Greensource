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
              <li class="breadcrumb-item"><a href="#">Product</a></li>
              <li class="breadcrumb-item active">Manage Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">





            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Availability</th>
                            <th>Stock</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alldata as $key => $products)

                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td><img src="{{ asset('upload/product_images/'.$products->image)}}" width="100px"; height="100px"></td>
                            <td>{{ $products->name }}</td>
                            <td>{{ $products->price }}</td>
                            <td>{{ $products->availability }}</td>
                            <td>{{ $products->stock }}</td>
                            <td>
                                <a href="{{route('product.edit',$products->id)}}"
                                    class="btn btn-info btn-flat mb-5">Edit</a>
                                <a href="{{route('product.delete',$products->id)}}"
                                    class="btn btn-danger btn-flat mb-5" id="delete">Delete</a>
                            </td>


                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>



        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection