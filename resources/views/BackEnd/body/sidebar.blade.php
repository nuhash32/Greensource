<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <a href="index3.html" class="brand-link">
        <img src="{{ asset('back/dist/img/logo/logo2.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Greensource</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <nav class="mt-3" style="text-align: center">
        <div class="dropdown">
          
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-lg"></i> Profile
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('profile.view') }}" style="color: black">View Profile</a>
            <a class="dropdown-item" href="{{ route('edit_profile.view') }}" style="color: black">Edit Profile</a>
            <a class="dropdown-item" href="{{ route('changepassword.view') }}"style="color: black">Change Password</a>
           
          </div>
        </div>
      </nav> -->



        <!-- Sidebar Menu -->
        <nav class="mt-4">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="far fa-id-badge"></i>
                        <p>
                            Profile
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('profile.view') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon fa-lg"></i>
                                <p>Profile View</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('edit_profile.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Edit Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('changepassword.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Change Password</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-shopping-cart"></i>
                        <p>
                            Product
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('buy.product') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon fa-lg"></i>
                                <p>Buy Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('show.cart') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cart</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('productstatus.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product Status</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-hand-holding-medical"></i>
                        <p>
                            Donation
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('donatenow.view') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon fa-lg"></i>
                                <p>Donate Now</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('donationstatus.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Donation Status</p>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
