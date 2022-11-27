<?php
    session_start();
    include('../db.php')
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
    <link href="css/sb-admin-2.css" rel="stylesheet">

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
            <li class="nav-item active">
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
                        <a class="collapse-item" href="addInvestor.php">Add Investor</a>
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
            </li>
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

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
                    </div>

                    <!-- Content Row 1 -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                No. of Investors</div>
                                                <?php
                                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">';
                                                    
                                                    $total="select * from investors";
                                                    $count=mysqli_query($connection,$total) or die( mysqli_error($connection)); 
                                                    $var=mysqli_num_rows($count);

                                                    echo $var.'</div>';
                                                ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            No. of Developed Projects</div>
                                            <?php
                                            echo '<div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">';
                                            $num="select * from developedProjects";
                                            $total="select * from projects";
                                            $count=mysqli_query($connection,$num) or die( mysqli_error($connection)); 
                                            $var=mysqli_num_rows($count);
                                            $whole=max(1,mysqli_num_rows(mysqli_query($connection,$total)));
                                            echo $var.'</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: '.($var*100)/$whole.'%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>';
                                        ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-anchor fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">No. of Developing Projects
                                            </div>
                                            <?php
                                            echo '<div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">';
                                                    $num="select * from developingProjects";
                                                    $count=mysqli_query($connection,$num) or die( mysqli_error($connection)); 
                                                    $var=mysqli_num_rows($count);
                                            echo $var.'</div>
                                                </div>  
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: '.($var*100/$whole).'%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>';
                                        ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fab fa-algolia fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Number of Projects</div>
                                            <?php
                                               $num="select * from projects";
                                               $count=mysqli_query($connection,$num);// or die( mysqli_error($connection)); 
                                               echo '<div class="h5 mb-0 font-weight-bold text-gray-800">'.mysqli_num_rows($count).'</div>';
                                            ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-cubes fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row 2-->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                New Users this month</div>
                                                <?php
                                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">';
                                                    
                                                    $total="select uid from users where datediff(now(),udate)<30";
                                                    $count=mysqli_query($connection,$total) or die( mysqli_error($connection)); 
                                                    $var=mysqli_num_rows($count);

                                                    echo $var.'</div>';
                                                ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Total No. of Users</div>
                                                <?php
                                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">';
                                                    
                                                    $total="select * from users";
                                                    $count=mysqli_query($connection,$total) or die( mysqli_error($connection)); 
                                                    $var=mysqli_num_rows($count);

                                                    echo $var.'</div>';
                                                ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">New Mentors this month
                                            </div>
                                            <?php
                                            echo '<div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">';
                                                    $num="select * from mentors where datediff(now(),mdate)<30";
                                                    $count=mysqli_query($connection,$num) or die( mysqli_error($connection)); 
                                                    $var=mysqli_num_rows($count);
                                            echo $var.'</div>
                                                </div>
                                                
                                            </div>';
                                        ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Total Number of Mentors</div>
                                            <?php
                                               $num="select * from mentors";
                                               $count=mysqli_query($connection,$num);// or die( mysqli_error($connection)); 
                                               echo '<div class="h5 mb-0 font-weight-bold text-gray-800">'.mysqli_num_rows($count).'</div>';
                                            ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->

                    <div class="row">

                        
                        <!-- Pie Chart -->
                        <div class="col-xl-6 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Our Projects Status</h6>
                                </div>
                                <!-- Card Body -->
                                <?php
                                    $num="select * from developedProjects";
                                    $count=mysqli_query($connection,$num) or die( mysqli_error($connection)); 
                                    $var1=mysqli_num_rows($count);
                                    $num="select * from developingProjects";
                                    $count=mysqli_query($connection,$num) or die( mysqli_error($connection)); 
                                    $var2=mysqli_num_rows($count);
                                ?>
                                <div class="card-body">
                                    <div id="piechart"></div>

                                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                                        <script type="text/javascript">
                                        // Load google charts
                                        google.charts.load('current', {'packages':['corechart']});
                                        google.charts.setOnLoadCallback(drawChart);

                                        // Draw the chart and set the chart values
                                        function drawChart() {
                                        var data = google.visualization.arrayToDataTable([
                                        ['Status', 'No. of Projects'],
                                        ['Developed', <?php echo $var1;?>],
                                        ['Developing', <?php echo $var2;?>]
                                        ]);

                                        // Optional; add a title and set the width and height of the chart
                                        var options = {'title':'VIC Projects', 'width':550, 'height':318};

                                        // Display the chart inside the <div> element with id="piechart"
                                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                        chart.draw(data, options);
                                        }
                                        </script>
                                </div>
                            </div>
                        </div>
                        <!-- Content Column -->
                        <div class="col-xl-6 col-lg-6 ">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tech Stack</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Java <span
                                            class="float-right">
                                            
                                            <?php
                                                $num="select * from projects where tech_stack like '%java%'";
                                                $count=mysqli_query($connection,$num) or die( mysqli_error($connection)); 
                                                $var1=mysqli_num_rows($count);
                                                
                                                $tmp1="select * from projects";
                                                $tmp2=mysqli_query($connection,$tmp1) or die( mysqli_error($connection)); 
                                                $total_projects=max(1,mysqli_num_rows($tmp2));
                                                $var1*=100;
                                                $var1/=$total_projects;
                                                echo $var1;
                                            ?>
                                            </span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $var1?>%"
                                            aria-valuenow="<?php echo $var1?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Sales Force <span
                                            class="float-right">
                                            <?php
                                            $num="select * from projects where tech_stack like '%sales force%'";
                                            $count=mysqli_query($connection,$num) or die( mysqli_error($connection)); 
                                            $var1=mysqli_num_rows($count);
                                            $var1*=100;
                                            $var1/=$total_projects;
                                            echo $var1;
                                            ?>
                                            </span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $var1;?>%"
                                            aria-valuenow="<?php echo $var1;?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Web Development <span
                                            class="float-right">
                                            <?php
                                            $num="select * from projects where tech_stack like '%web development%'";
                                            $count=mysqli_query($connection,$num) or die( mysqli_error($connection)); 
                                            $var1=mysqli_num_rows($count);
                                            $var1*=100;
                                            $var1/=$total_projects;
                                            echo $var1;
                                            ?>
                                            </span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: <?php echo $var1;?>%"
                                            aria-valuenow="<?php echo $var1;?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">IOT <span
                                            class="float-right">
                                            <?php
                                            $num="select * from projects where tech_stack like '%iot%'";
                                            $count=mysqli_query($connection,$num) or die( mysqli_error($connection)); 
                                            $var1=mysqli_num_rows($count);
                                            $var1*=100;
                                            $var1/=$total_projects;
                                            echo $var1;
                                            ?>
                                            </span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $var1;?>%"
                                            aria-valuenow="<?php echo $var1;?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Blockchain <span
                                            class="float-right">
                                            <?php
                                            $num="select * from projects where tech_stack like '%blockchain%'";
                                            $count=mysqli_query($connection,$num) or die( mysqli_error($connection)); 
                                            $var1=mysqli_num_rows($count);
                                            $var1*=100;
                                            $var1/=$total_projects;
                                            echo $var1;
                                            ?>
                                            </span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $var1;?>%"
                                            aria-valuenow="<?php echo $var1;?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
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

</body>

</html>