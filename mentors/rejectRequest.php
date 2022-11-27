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
                        <li class="nav-item active"><a class="nav-link" href="./activeMentoring.php"><span class="fa fa-home fa-lg"></span> Active Mentoring</a></li>
                        <li class="nav-item "><a class="nav-link" href="./myprofile.php"><span class="fa fa-list fa-lg"></span> My Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="./contactus.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                        
                    </ul>  
                    <a href="../logout.php" ><span class="fa fa-sign-out fa-lg"></span> Logout</a>
                </div> 
            </div>
        </nav>
        <br><br>
<?php
if(isset($_SESSION["id"])){
?>
        <section class="prob-statement-panel">
            <?php   
                $limit = 10;  // Number of entries to show in a page.
                // Look for a GET variable page if not found default is 1.     
                if (isset($_GET["page"])) { 
                  $pn  = $_GET["page"]; 
                } 
                else { 
                  $pn=1; 
                };  
              
                $start_from = ($pn-1) * $limit;
            ?>
            <div class="container wrapper">
                <?php
                    if(isset($_GET["pid"]) and isset($_GET["mid"])){
                        $pid=$_GET["pid"];
                        $mid=$_GET["mid"];
                        
                        $removeReq="delete from mentoring_requests where pid=$pid and mid=$mid";
                        if(mysqli_query($connection,$removeReq)){
                            echo "You have Rejected to mentor the project with id".$pid;
                        } 
                        else{
                            echo 'Oops there was an error deleting from requests table. Contact Admin... '.mysqli_error($connection);
                        }
                    }
                ?>
            </div>
        </section>
<?php
}else echo "<h1>Please login first .</h1>";
?>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script type="text/javascript" src="https://www.sih.gov.in/js/bootstrap.js"></script>

     </body>  

     </html>
