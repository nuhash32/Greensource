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
            <i class="fas fa-user-circle fa-lg"></i> Admin Profile
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('adminprofile.view') }}" style="color: black">View Profile</a>
            <a class="dropdown-item" href="{{ route('admin_edit_profile.view') }}" style="color: black">Edit Profile</a>
            <a class="dropdown-item" href="{{ route('adminchangepassword.view') }}"style="color: black">Change Password</a>
           
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
                            Admin Profile
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('adminprofile.view') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon fa-lg"></i>
                                <p>Admin Profile View</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin_edit_profile.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Admin Edit Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('adminchangepassword.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Admin Change Password</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-users-cog"></i>
                        <p>
                            Manage Admin
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('addadmin.view') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon fa-lg"></i>
                                <p>Add Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('viewadmin.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Admin</p>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-hand-holding-medical"></i>
                        <p>
                            Products
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('product.add') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon fa-lg"></i>
                                <p>Add Product</p>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a href="{{ route('product.view') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon fa-lg"></i>
                                <p>Manage Product</p>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a href="{{ route('view.cart') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon fa-lg"></i>
                                <p>Manage Cart</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('confirmproducts.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Confirmed Products</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-hand-holding-medical"></i>
                        <p>
                            Admin Donation View
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('donatearea.view') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon fa-lg"></i>
                                <p>Add Donation Area</p>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a href="{{ route('donationareastatus.view') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon fa-lg"></i>
                                <p>Donation Area Status</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('viewalldonations.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View All Donations</p>
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
