@extends('BackEnd.master')
@section('BackEnd')

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
              <li class="breadcrumb-item active">Product Status</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div style="margin-top: 25px; text-align:center">
        <ul class="list-unstyled">
<h5><u>Profile Information</u></h5>
<li><b>Name: </b>{{ Auth::user()->name }}</li>
<li> <b>Email: </b> {{ Auth::user()->email }}</li>
<li><b>Contact No: </b>{{ Auth::user()->contact }}</li>

</ul>
       

      </div>
      <div class="container-fluid">
        <div class="row" style="text-align: center">


       
            <div class="table-responsive">
            <table  class="table table-bordered table-striped">
                
               
               
<tr>
  
                    <th>Cart ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Transaction ID</th>
                    <th>Status</th>
                  
                   
           
                </tr>

            
                
           
                @foreach ($alldata as $key => $sales)

                

                <tr>
                  <td>{{$sales['cart_id']}}</td>
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