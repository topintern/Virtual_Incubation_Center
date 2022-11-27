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
    <script>
        function change()
        {
            var status = document.getElementById("stage")
            if(status.value=="Developed")
            {
                document.getElementById("dur").style.visibility="hidden";
            }
            else if(status.value=="Developing")
            {
                document.getElementById("dur").style.visibility="visible";
            }
        }
    </script>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#"><img src="../img/logo.png" height="30" width="41" alt="logo"></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="myprojects.php"><span class="fa fa-list fa-lg"></span> My Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="./myprofile.php"><span class="fa fa-info fa-lg"></span> My Profile</a></li>
                    <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-list fa-lg"></span> Register Project</a></li>
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
        if(isset($_GET["page"])){
            $pn=$_GET["page"];
            echo '<h6>$pn</h6>';
        }
        else{
            $pn=1;
        }  
    ?> 
    <div class="container">
            <div class="row row-content">
                <form action="insertProjects.php" method="POST">
                            <table cellpadding="6" cellspacing="12"  width="100%">
                                <tr>
                                    <th style="color:blue">Add a VIC Project:</th>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Enter project title:</b></td>
                                    <td>
                                        <input type="text" id="title" name="title"  size="25" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Enter project lead name:</b></td>
                                    <td>
                                        <input type="text" id="name" name="name"  size="25" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Project Description:</b></td>
                                    <td><textarea placeholder="Project Description" rows = "5" cols = "40" minLength="20" maxlength = "200" name = "description" required></textarea></td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Enter your email:</b></td>
                                    <td><input type="email" id="email" name="email" size="25" required></td>
                                </tr>
                                <tr>
                                    <td class="number"><b>Enter your phone number:</b></td>
                                    <td><input type="tel" id="phone" name="phone" pattern="[0-9]{10}" size="25" required></td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Enter your TechStack:</b></td>
                                    <td>
                                        <select id="techstack" name="techstack">
                                            <option selected disabled>Choose here</option>
                                            <option value="Sales Force">Sales Force</option>
                                            <option value="IOT">IOT</option>
                                            <option value="Web Development">Web Development</option>
                                            <option value="Blockchain">Blockchain</option>
                                            <option value="Java">Java</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Mentor Required?</b></td>
                                    <td><input type="radio" id="yes" name="mentor" value="yes" required="required">Yes&nbsp;&nbsp;<input type="radio" id="no" name="mentor" value="no" required="required">No</td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Is this project made for social cause?</b></td>
                                    <td><input type="radio" id="yes" name="social" value="yes" required="required">Yes&nbsp;&nbsp;<input type="radio" id="no" name="social" value="no" required="required">No</td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Investment Needed</b></td>
                                    <td><input type="text" id="investment" name="investment"  maxlength = "9" size="25"></td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Return On Investment</b></td>
                                    <td><input type="text" id="ROI" name="ROI"  maxlength = "9" size="25"></td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Enter your Location:</b></td>
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
                                    <td class="txt">
                                        <b>Intended Audience:</b>
                                        <br>Every One - Visible to all
                                        <br>Investors - Visible to investors
                                    </td>
                                    <td>
                                        <select name="audience" id="audience" >
                                            <option selected disabled>Choose here</option>
                                            <option value="EveryOne">Every One</option>
                                            <option value="Investors">Investors</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Stage:</b></td>
                                    <td>
                                        <select id="stage" name="stage" onchange="change()">
                                            <option selected disabled>Choose here</option>
                                            <option value="Developed">Developed</option>
                                            <option value="Developing">Developing</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr id="dur">
                                    <td class="txt"><b>Duration:</b><br>(in weeks to finish development)</td>
                                    <td><input type="text" id="duration" name="duration"><br><br></td>
                                </tr>
                                <tr>
                                    <td><input type="reset"></td>
                                    <td><input type="submit" name="submit" value="Submit"></td>
                                </tr>
                            </table>
                        </form>            
            </div>
    </div>
<?php
}else echo '<h1>Please login first</h1>';
?>
    <footer class="footer">
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