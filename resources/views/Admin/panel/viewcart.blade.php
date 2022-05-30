@extends('Admin.master')
@section('Admin')

<script language="javascript">
  function Clickheretoprint()
  { 
    window.print();
    docprint.document.write('<html><head><title>My new title</title>'); 
    
  }
  </script>

<style>
  table, td, th {
    border: 1px solid black;
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
  }
  @media print{
    #printPageButton {

      display: none;
    }
  }
  
  </style>

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
              <li class="breadcrumb-item active">View Cart</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
     
      <div class="container-fluid">
        <div class="row" style="text-align: center">


       
            <div class="table-responsive table-sm">
            <table class="table table-bordered table-striped">
                
               
               
<tr>
  
                    <th>Cart ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Action</th>
                   
                  
                   
           
                </tr>

            
                
           
                @foreach ($alldata as $key => $carts)

                

                <tr>
                    <td>{{ $carts['id'] }}</td>
                    <td>{{ $carts['name']}}</td>
                    <td>{{ $carts['email']}}</td>
                    <td>{{ $carts['phone'] }}</td>
                    <td>{{ $carts['address']}}</td>
                    <td>{{ $carts['product_name']}}</td>
                    <td>{{ $carts['price']}}</td>
                    <td>{{ $carts['quantity']}}</td>
                    <td>{{ $carts['price'] * $carts['quantity']}}</td>
                    <td>{{ $carts['status']}}</td>
                    <td><a href="{{route('managecart.edit',$carts->id)}}"
                      class="btn btn-info btn-flat mb-5">Edit</a></td>
                  
                        </tr>



            
                @endforeach
                
                </table>

            <div style="text-align: center; margin: 10px 0px">

              <button id="printPageButton"><a href="javascript:Clickheretoprint()">Print</a></button>
            </div>
               
               
            </div>
          
           
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  

@endsection