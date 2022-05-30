@extends('Admin.master')
@section('Admin')


<style>
  table, td, th {
    border: 1px solid black;
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
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
              <li class="breadcrumb-item"><a href="#">Donation Area</a></li>
              <li class="breadcrumb-item active">Donation Area Status</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row" style="text-align: center">
            <div class="table-responsive-md">
            <table style="border: 1px solid black;">
                
               
               
<tr>
  
                    <th>ID</th>
                   
                    <th>Donate Area</th>
                    <th>Action</th>
                    <th>Action</th>
           
                </tr>

             
                
                @foreach ($alldata as $key => $donate_areas)

                <tr>
                 
                  <td>{{ $donate_areas->id}}</td>
                 
                  <td>{{ $donate_areas->donate_area}}</td>
                  <td><a href="{{route('donate_area.edit',$donate_areas->id)}}">Edit</a></td>
                  
                  <td><a href="{{route('donate_area.delete',$donate_areas->id)}}">Delete</a></td>
                    
                   
                
                </tr>
            
               
              
                    
                @endforeach
                
                </table>
            </div>
          
           
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


@endsection