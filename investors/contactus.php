<?php
    session_start();
    include('../db.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="https://www.sih.gov.in/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="https://www.sih.gov.in/css/style_new.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <title>VIC : Investor</title>
        <link rel="icon" href="../img/logo.png" type="image/icon type">
		
	</head>
    <body>
        <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="Navbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="./description.php"><span class="fa fa-home fa-lg"></span> Home</a></li>  
                        <li class="nav-item"><a class="nav-link" href="./myprofile.php"><span class="fa fa-info fa-lg"></span> My Profile</a></li>     
                        <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                        <li class="nav-item"></li>
                    </ul>  
                    <a href="../logout.php" ><span class="fa fa-sign-out fa-lg"></span> Logout</a>
                </div> 
            </div>
        </nav>
        <section class="total-statement">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="statement-box">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Total Statements</h3>
                                </div>
                                <div class="col-md-2">
                                    <div>
                                        <?php
                                            $total="select * from projects";
                                            $count=mysqli_query($connection,$total) or die( mysqli_error($connection)); 
                                            $var=mysqli_num_rows($count);
                                            echo "<h3>".$var."</h3>";
                                        ?>
                                        <p>Total</p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div>
                                        <?php
                                            $total="select * from projects where developing = 1";
                                            $count=mysqli_query($connection,$total) or die( mysqli_error($connection)); 
                                            $var=mysqli_num_rows($count);
                                            echo "<h3>".$var."</h3>";
                                        ?>
                                        <p>Developing</p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div>
                                        <?php
                                            $total="select * from projects where developing = 0";
                                            $count=mysqli_query($connection,$total) or die( mysqli_error($connection)); 
                                            $var=mysqli_num_rows($count);
                                            echo "<h3>".$var."</h3>";
                                        ?>
                                        <p>Developed</p>
                                    </div>
                                </div>
                            </div>
                            <p><i>* Developing : Projects which are under development at present</i></p>
                            <p><i>* Developed  : Projects which are developed and ready for release</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row row-content">
                <div class="col-12">
                    <h3>Location Information</h3>
                </div>
                <div class="col-12 col-sm-4 offset-sm-1">
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
                <div class="col-12 col-sm-6 offset-sm-1">
                    <h5>Map of our Location</h5>
                    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12891.224529980023!2d-97.0725873!3d36.1225806!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x75accdcdce17dd21!2sNancy%20Randolph%20Davis%20Building!5e0!3m2!1sen!2sus!4v1669538574785!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <iframe style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>