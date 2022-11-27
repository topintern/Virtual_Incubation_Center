<?php
    session_start();
    include('../db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VIC : Admin</title>
    <link rel="icon" href="../img/logo.png" type="image/icon type">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon ">
                    <i class="fas fa-cogs"></i>
                </div>
                <div class="sidebar-brand-text mx-3">VIC : Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-feather"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="addMentor.php">Add Mentor</a>
                        <a class="collapse-item" href="addProject.php">Add Project</a>
                        <a class="collapse-item active" href="#">Add Investor</a>
                        <a class="collapse-item" href="addUser.php">Add User</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Information
            </div>

            <!-- Nav Item - Mentors -->
            <li class="nav-item">
                <a class="nav-link" href="mentors.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Our Mentors</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="projects.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Our Projects</span></a>
            </li>
            <!-- Nav Item - Investors -->
            <li class="nav-item">
                <a class="nav-link" href="investors.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Our Investors</span></a>
            </li>
            <!-- Nav Item - Users -->
            <li class="nav-item">
                <a class="nav-link" href="users.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Our Users</span></a>
            </li>>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-1" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator</span>
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

                    </ul>

                </nav>
                <!-- End of Topbar -->
<?php
if(isset($_SESSION["id"])){
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="container-fluid">
                        <form action="insertInvestors.php" methos="post">
                            <table cellpadding="6" cellspacing="12"  width="80%">
                                <tr>
                                    <th style="color:blue">Add a VIC Investor:</th>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Enter name of the Investor:</b></td>
                                    <td>
                                        <input type="text" id="name" name="name"  size="25" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Enter investor email:</b>(username)</td>
                                    <td><input type="email" id="email" name="email" size="25" required></td>
                                </tr>
                                <tr>
                                    <td class="number"><b>Enter investor phone number:</b></td>
                                    <td><input type="tel" id="phone" name="phone" pattern="[0-9]{10}" size="25" required></td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Enter investor gender:</b></td>
                                    <td><input type="radio" id="male" name="gender" value="male" required="required">Male&nbsp;&nbsp;<input type="radio" id="female" name="gender" value="female" required="required">Female</td>
                                </tr>

                                <tr>
                                    <td class="txt"><b>Current Organization:</b></td>
                                    <td><input type="text" id="organization" name="organization" size="25"></td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Highest Qualification</b></td>
                                    <td><input type="text" id="degree" name="degree"  maxlength = "9" size="25"></td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Enter Investor Location:</b></td>
                                </tr>
                                <tr>
                                    <tr>
                                        <th>City: </th>
                                        <th>State: </th>
                                    </tr>
                                    <tr>
                                        <td><input type="text" id="city" name="city" required></td>
                                        <td><input type="text" id="state" name="state" required></td>
                                    </tr>
                                </tr>
                                <tr>
                                    <td class="txt"><b>LinkedIn Profile URL:&nbsp;</b></td>
                                    <td><input type="url" id="linkedin" name="linkedin"></td>
                                </tr>
                                <tr>
                                    <td><input type="reset"></td>
                                    <td><input type="submit" value="Submit"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
<?php
}else echo '<br><br><h4>Please Login to view admin content.</h4>';
?>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; VIC 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>