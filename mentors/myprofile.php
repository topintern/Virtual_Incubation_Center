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
                        <li class="nav-item "><a class="nav-link" href="mentor_home.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                        <li class="nav-item "><a class="nav-link" href="./activeMentoring.php"><span class="fa fa-home fa-lg"></span> Active Mentoring</a></li>
                        <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-list fa-lg"></span> My Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="./contactus.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                        
                    </ul>  
                    <a href="../logout.php" ><span class="fa fa-sign-out fa-lg"></span> Logout</a>
                </div> 
            </div>
        </nav>
<?php
if(isset($_SESSION["id"])){
?>
        <section class="prob-statement-panel">
            <div class="container wrapper">
                <h6>My Profile</h6>
                <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <tbody>
                        <?php
                            $mid=$_SESSION["id"];
                            $table="mentors";
                            //$sql="SELECT * FROM where".$table;
                            $result = mysqli_query($connection,"SELECT * FROM ".$table." where mid=$mid") or die( mysqli_error($connection));
                            $all_property = array();  //declare an array for saving property
                            if(mysqli_num_rows($result)==0){
                                echo 'Sorry mentor data not found';
                            }
                            //showing property
                            //echo '<table width="100%" class="data-table" >
                               // echo'   <tr class="data-heading">';  //initialize table tag
                            while ($property = mysqli_fetch_field($result)) {
                                //echo '<th>' . $property->name . '</th>';  //get field name for header
                                array_push($all_property, $property->name);  //save those to array
                                
                            }
                            //echo '</tr>'; //end tr tag
                            
                            //showing all data
                            while ($row = mysqli_fetch_array($result)) {
                                //echo "<tr>";
                                foreach ($all_property as $item) {
                                    echo '<tr><th>'.$item.'</th>';    
                                    echo '<td>' . $row[$item] . '</td></tr>'; //get items using property value
                                }
                                //echo '</tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
<?php
}else echo "<h1>Please login first .</h1>";
?>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script type="text/javascript" src="https://www.sih.gov.in/js/bootstrap.js"></script>

     </body>  

     </html>
