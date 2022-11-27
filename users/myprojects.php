<?php
    session_start();
    include('../db.php');
?>
<html>
<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    
    <title>VIC : Users</title>
    <link rel="icon" href="../img/logo.png" type="image/icon type">
</head>
<body>
    
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#"><img src="../img/logo.png" height="30" width="41" alt="logo"></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-list fa-lg"></span> My Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="./myprofile.php"><span class="fa fa-info fa-lg"></span> My Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="./project_registeration.php"><span class="fa fa-list fa-lg"></span> Register Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="public_projects.php"><span class="fa fa-list fa-lg"></span> Public Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="./contactus.php"><span class="fa fa-address-card fa-lg"></span> Help</a></li>
                </ul>
                <span class="navbar-text">
                    <a class="nav-link" href="../logout.php" target="_blank">
                        <span class="fa fa-sign-in"></span> Logout
                    </a>
                </span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
<?php
    echo '<br>';
    if(isset($_SESSION["id"])){
?>
    <?php
        $uid=$_SESSION["id"];
        $limit=10;
        if(isset($_GET["page"])){
            $pn=$_GET["page"];
        }
        else{
            $pn=1;
        }
        $start_from=($pn-1)*$limit;    
    ?> 
    <div class="container">
            <div class="row row-content">
                <h6>My Projects</h6>
                <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <tbody>
                                        <?php
                                            $table="projects";
                                            //$sql="SELECT * FROM where".$table;
                                            $result = mysqli_query($connection,"SELECT pid,title,description,mentor_req,intended_audience,pdate FROM ".$table." where uid=$uid order by pdate desc LIMIT $start_from,$limit") or die( mysqli_error($connection));
                                            $all_property = array();  //declare an array for saving property
                                            
                                            //showing property
                                            //echo '<table width="100%" class="data-table" >
                                                echo'   <tr class="data-heading">';  //initialize table tag
                                            while ($property = mysqli_fetch_field($result)) {
                                                if($property->name=="pid"){continue;}
                                                echo '<th>' . $property->name . '</th>';  //get field name for header
                                                array_push($all_property, $property->name);  //save those to array
                                            }
                                            echo '</tr>'; //end tr tag
                                            
                                            //showing all data
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "<tr>";
                                                foreach ($all_property as $item) {
                                                    if($item=="mentor_req" && $row[$item]==0)
                                                    echo '<td>' . "No" . '</td>'; //mentor_req is no
                                                    else if($item=="mentor_req" && $row[$item]==1)
                                                    echo '<td>' . "Yes" . '</td>'; //mentor_req is yes
                                                    else
                                                    echo '<td>' . $row[$item] . '</td>'; //get items using property value
                                                }
                                                echo '</tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                <ul class="pagination">
                                <?php    
                                    $file="myprojects";
                                    $sql="select count(*) from $table";
                                    $rs_result=mysqli_query($connection,$sql);
                                    $row=mysqli_fetch_row($rs_result);
                                    $total_records=$row[0];

                                    $total_pages = ceil($total_records/$limit);
                                    $paglink="";
                                    for($i=1;$i<=$total_pages;$i++){
                                        if($i==$pn){
                                            $paglink .= "<li class='active'><a href='$file.php?page=".$i."'>".$i."</a></li> &nbsp;";
                                        }
                                        else{
                                            $paglink .= "<li><a href='$file.php?page=".$i."'>".$i."</a></li> &nbsp;";
                                        }
                                    };
                                    echo $paglink;
                                ?>
                                </ul>
            </div>
    </div>
<?php
}else echo '<h1>Please login first</h1>';
?>
    <footer class="footer ">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              Nancy Randolph Davis Building<br>
		              122 N Monroe St, Stillwater, Oklahoma State University<br>
                      OK 74075<br>
		              <i class="fa fa-phone fa-lg"></i>: (475) 291-1455<br>
		              <i class="fa fa-fax fa-lg"></i>: (475) 291-1455<br>
		              <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:vic.info@gmail.com">vic.info@gmail.com</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id=" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/" target="_blank"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon " href="mailto:" target="_blank"><i class="fa fa-envelope-o fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2021. All rights reserved.</p>
                </div>
           </div>
        </div>
    </footer>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>