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

        if(isset($_GET["page"])){
            $pn=$_GET["page"];
            echo '<h6>$pn</h6>';
        }
        else{
            $pn=1;
        }        
    ?> 
<?php
    echo '<br>';
    if(isset($_SESSION["id"])){
?>
    <div class="container">
            <div class="row row-content">
                <?php
                            $uid=$_SESSION["id"];
                            $title=$_REQUEST['title'];
                            $email=mysqli_real_escape_string($connection,$_REQUEST['email']);
                            $name=$_REQUEST['name'];
                            $ROI=$_REQUEST['ROI'];
                            $investment=$_REQUEST['investment'];
                            $phone=$_REQUEST['phone'];
                            $techstack=$_REQUEST['techstack'];
                            $mentor=$_REQUEST['mentor']==="yes"?1:0;
                            $social=$_REQUEST['social']==="yes"?1:0;
                            $city=$_REQUEST['city'];
                            $state=$_REQUEST['state'];
                            //$url = urlencode($url); 
                            //$url = mysqli_real_escape_string($connection,$url); 
                            //$sitename= $_GET['site_name']; 
                            $desc=$_REQUEST['description'];
                            $audience=$_REQUEST['audience'];
                            $duration=$_REQUEST['duration'];
                            $stage=1;
                           
                            if(empty($_REQUEST['duration'])){
                                $stage=0;
                                $duration=0;
                            }

                           

                            $table="projects";
                            $query="insert into $table(title,project_lead,uid,mailId,phno,mentor_req,social_cause,pdf,tech_stack,city,state,description,duration,ROI,investment_needed,intended_audience,developing,pdate)
                                                    values('$title','$name',$uid,'$email','$phone','$mentor','$social','$pname','$techstack','$city','$state','$desc','$duration','$ROI','$investment','$audience','$stage',now())";
                            if(mysqli_query($connection,$query)){
                                $pid=mysqli_insert_id($connection);
                                include('../mailing.php');
                                // if($mentor==1){
                                //     $ids=array();
                                //     $eligible_mentors="select * from mentors where mstack like '%$techstack%' ";
                                //     $mentors=mysqli_query($connection,$eligible_mentors);
                                //     while($row = mysqli_fetch_array($mentors)) {
                                //         array_push($ids, $row["mid"]);
                                //     }
                                    
                                //     foreach($ids as $i){
                                //         $temp="insert into mentoring_requests(pid,mid) values($pid,$i)";
                                //         if(mysqli_query($connection,$temp)){
                                //             echo 'Sent mentoring requests.....<br>';
                                //         }
                                //         else{
                                //             echo 'ERROR: Try again'.mysqli_error($connection);
                                //         }
                                //     }
                                // }
                                echo '<a href="addProject.php">Successful, Click to go back</a>';
                            }
                            else{
                                echo 'ERROR: Try again'.mysqli_error($connection);
                            }
                            
                            
                            
                            mysqli_close($connection);
                        ?>            
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