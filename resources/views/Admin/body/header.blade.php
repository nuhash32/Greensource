

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('admin.home')}}" class="nav-link">Admin Dashboard</a>
      </li>
      
    </ul>

   <!--  <ul class="navbar-nav">
    
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('addadmin.view')}}" class="nav-link">Add Admin</a>
      </li>
      
    </ul>
  
    <ul class="navbar-nav">
    
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('viewadmin.view')}}" class="nav-link">View Admin List</a>
      </li>
      
    </ul> -->

    <!-- Right navbar links -->

    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('panel.logout')}}" role="button">
         Logout
        </a>
      </li>

    </ul>

 
  </nav>