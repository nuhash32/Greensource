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
              <li class="breadcrumb-item"><a href="#">Products</a></li>
              <li class="breadcrumb-item active">View Confirm Products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div style="margin: 25px 0px; text-align:center">
        <ul class="list-group list-group-unbordered mb-3">
<h5><u>View Confirm Products</u></h5>


</ul>
       

      </div>
      <div class="container-fluid">
        <div class="row" style="text-align: center">
            <div class="table-responsive table-sm">
                <table  class="table table-bordered table-striped">
                
               
               
<tr>
  
                    <th>Cart ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Amount</th>
                    <th>Transaction ID</th>
                    <th>Status</th>
                  
                   
           
                </tr>

                
              
                @foreach ($alldata as $key => $sales)
                <tr>
                    <td>{{$sales['cart_id']}}</td>
                    <td>{{ $sales['name']}}</td>
                    <td>{{ $sales['email']}}</td>
                    <td>{{ $sales['phone']}}</td>
                    <td>{{ $sales['address']}}</td>
                    <td>{{ $sales['product_name']}}</td>
                    <td>{{ $sales['price']}}</td>
                    <td>{{ $sales['quantity']}}</td>
                    <td>{{ $sales['amount']}}</td>
                    <td>{{ $sales['transaction_id']}}</td>
                    <td>{{ $sales['status']}}</td>
                  
                
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