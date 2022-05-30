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
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">View All Admin</li>
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
                    <th>Name</th>
                    <th>Email Address</th>
                    <th>Address</th>
                    <th>Contact</th>
                    
                   
           
                </tr>

            
                
                
                
                @foreach ($users as $user)
                
                

                <tr>
                    <td>{{ $user['id']}}</td>
                    <td>{{ $user['name']}}</td>
                    <td>{{ $user['email']}}</td>
                    <td>{{ $user['address']}}</td>
                    <td>{{ $user['contact']}}</td>
                  
                   
                  
                
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