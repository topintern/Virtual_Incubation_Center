<?php
    session_start();
    include("../db.php")
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://www.sih.gov.in/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="https://www.sih.gov.in/css/style_new.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/styles.css">
        <title>VIC : Mentor</title>
        <link rel="icon" href="../img/logo.png" type="image/icon type">
    </head>

    <body>
    	<nav class="navbar navbar-dark navbar-expand-sm fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-dark" id="Navbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="./mentor_home.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                        <li class="nav-item active"><a class="nav-link" href="activeMentoring.php"><span class="fa fa-home fa-lg"></span> Active Mentoring</a></li>
                        <li class="nav-item"><a class="nav-link" href="./contactus.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                        
                    </ul>  
                    <a href="../logout.php" ><span class="fa fa-sign-out fa-lg"></span> Logout</a>
                </div> 
            </div>
        </nav>
        <section class="prob-statement-panel">
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12891.224529980023!2d-97.0725873!3d36.1225806!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x75accdcdce17dd21!2sNancy%20Randolph%20Davis%20Building!5e0!3m2!1sen!2sus!4v1669538574785!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                
            </div>

            
        </div>
        </section>
        <footer class="footer  ">
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
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script type="text/javascript" src="https://www.sih.gov.in/js/bootstrap.js"></script>

     </body>  

     </html>
