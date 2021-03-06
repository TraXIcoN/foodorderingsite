
<script type="text/javascript">   /*
<!-- Nav Item - User Information -->
                        
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>    

*/
</script>




<!----   Navbar Downloaded Template  ---->
  

          <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #ca0000;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin-index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">HOM Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin-index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            

           <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Main Screens:</h6>
                        <a class="collapse-item" href="../index.php">Home</a>
                        <a class="collapse-item" href="../menu.php">Menu</a>
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="../login.php">Login</a>
                        <a class="collapse-item" href="../register.php">Register</a>
                        <a class="collapse-item" href="../forgot-password.php">Forgot Password</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Heading -->
            <div class="sidebar-heading" style="padding-top: 15px;">
                Tables
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Customer Table</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="food.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Food Table</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="category.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Category Table</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tickets.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tickets table</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="orders.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Orders Table</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="review.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Reviews Table</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="order_details.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Order Details Table</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="payment.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Payments Table</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="delivery.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Delivery Table</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



            
        </ul>
        <!-- End of Sidebar -->

        <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
        
        <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>





