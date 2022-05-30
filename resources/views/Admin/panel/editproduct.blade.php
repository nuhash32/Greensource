@extends('Admin.master')
@section('Admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Product Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


              <form method="post" action="{{route('product.update',$editData->id)}}" enctype="multipart/form-data">
                @csrf
            <div class="card-body">



                <div class="col-md-6">


                  <div class="form-group">
                    <label for="productpicture">Product Picture<span class="text-danger">*</span></label>
                    <div class="controls">
                        <input type="file" name="image" class="form-control" id="image">
                    </div>
                </div>

                <div class="form-group">
                  <div class="controls">

                  <img id="showimage" src="{{(!empty($editData->image))? url('upload/product_images/'.$editData->image): url('upload/no_image.jpg') }}"
                  width="100px" height="100px" border: 1px solid #000000;>

              </div>
              </div>




                <div class="form-group">
                  <label for="productname">Product Name<span class="text-danger">*</span></label>
                  <div class="controls">
                      <input type="text" name="name" class="form-control"
                          value="{{$editData->name}}" required="">

                  </div>
              </div>
              
                   
              <div class="form-group">
                <label for="productprice">Product Price <span class="text-danger">*</span></label>
                <div class="controls">
                    <input type="text" name="price" class="form-control"
                        value="{{$editData->price}}" required="">
                </div>
            </div>
       
           
            <div class="form-group">
              <label for="availability">Product Availability</label>
              <div class="controls">
                  <select name="availability" class="form-control" required="true"
                      aria-invalid="false">
                     
                      <option value="" selected="" disabled="">Select Availability</option>
                      <option value="Available" {{($editData->availability== "Available" ?"selected":"")}} >Available</option>
                      <option value="Not Available" {{($editData->availability== "Not Available" ?"selected":"")}} >Not Available</option>


                    
                  </select>
              </div>
            </div>
          </div>
            <div class="form-group">
              <label for="stock">Stock<span class="text-danger">*</span></label>
              <div class="controls">
                  <input type="text" name="stock" class="form-control"
                      value="{{$editData->stock}}" required="" readonly>

              </div>
          </div>
          <div class="form-group">
            <label for="stock_in">Stock In</span></label>
            <div class="controls">
                <input type="text" name="stock_in" class="form-control"
                    value="" >

            </div>
        </div>
        <div class="form-group">
          <label for="stock_out">Stock Out</label>
          <div class="controls">
              <input type="text" name="stock_out" class="form-control"
                  value="" >

          </div>
      </div>
            <div class="text-xs-right">
              <input type="submit" value="Update" style="float: left"
                  class="btn btn-outline btn-rounded btn-success mb-5">
          </div>

                </div>



            </div>

        </form>


            </div>
          </div>



        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <script type="text/javascript">
    $(document).ready (function(){ 
        $('#image').change (function(e){
        var reader = new FileReader();
            reader.onload = function(e) {
                $('#showimage').attr('src', e.target.result);
}

reader.readAsDataURL(e.target.files['0']);

});

});


</script>
  @endsection