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
              <li class="breadcrumb-item"><a href="#">Donation</a></li>
              <li class="breadcrumb-item active">Donation Status</li>
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


       
            <div class="table-responsive-md">
            <table style="border: 1px solid black;">
                
               
               
<tr>
  
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>Address</th>
                    <th>Donation Amount</th>
                    <th>Donation Area</th>
                    <th>Transaction ID</th>
                    <th>Status</th>
                  
                   
           
                </tr>

            
                
           
                @foreach ($alldata as $key => $orders)

                

                <tr>
                  <td>{{ $orders['id']}}</td>
                    <td>{{ $orders['name']}}</td>
                    <td>{{ $orders['email']}}</td>
                    <td>{{ $orders['phone']}}</td>
                    <td>{{ $orders['address']}}</td>
                    <td>{{ $orders['amount']}}</td>
                    <td>{{ $orders['donate_area']}}</td>
                    <td>{{ $orders['transaction_id']}}</td>
                    <td>{{ $orders['status']}}</td>
                  
                
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