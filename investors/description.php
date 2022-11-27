<?php
    session_start();
    include("../db.php")
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="https://www.sih.gov.in/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="https://www.sih.gov.in/css/style_new.css" rel="stylesheet" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
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
                        <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Home</a></li>
                        <li class="nav-item "><a class="nav-link" href="./myprofile.php"><span class="fa fa-info fa-lg"></span> My Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="./contactus.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
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
<?php
if(isset($_SESSION["id"]) and isset($_SESSION["name"])) {
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
                <table id="dataTablePS" class="table table-striped table-bordered table-hover" style="width:100%">
                    <?php
                        $table="projects";
                        $sql="SELECT * FROM ".$table;
                        $result = mysqli_query($connection,"SELECT * FROM ".$table." LIMIT $start_from, $limit") or die( mysqli_error($connection)); 
                        $page="description"           
                    ?>
                    <thead>
                        <tr class="row-md-24">
                            <!-- <th>Logo</th> -->
                            <th class="col-md-2">Title</th>
                            <th class="col-md-2">Description</th>
                            <th class="col-md-2">Status</th>
                            <th class="col-md-2">Team Leader</th>
                            <th class="col-md-2">State</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $all_property=array('pid','title','description','developing','project_lead','city');
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<tr>';
                                $i=0;                               
                                
                                foreach ($all_property as $item) {
                                    if($item=="pid"){continue;}
                                    if($item === "description"){
                                        echo '<td class="colomn_border"><a style ="font-size:15px ;margin-bottom: 4px !important; cursor: pointer"  data-toggle="modal" data-target="#ViewProblemStatement'.$row["pid"].'">';
                                        echo substr($row[$item],0,10);
                                        echo '</a><div id="ViewProblemStatement'.$row["pid"].'" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                         Modal content
                                        <div class="modal-content">
                                            <button type="button" class="close" style="text-align:justify ;" data-dismiss="modal">&times;</button>                                            
                                            <h6 class="modal-title" style="text-align: center; font-size: 18px; font-weight: bold;">Description</h6>                                            
                                            <div class="modal-body">                                    
                                                <table id="settings" class="table table-bordered table-hover">
                                                    <thead>';
                                                    echo '<tr>
                                                            <td>
                                                                Project By:
                                                            </td>
                                                            <td>';
                                                                echo $row["project_lead"];
                                                    echo ' </td>';
                                                    if($row["developing"]==true){
                                                        echo '<tr><td>Duration:</td><td>';
                                                        echo $row["duration"].'</td></tr>';
                                                    }
                                                    echo '<tr>
                                                        <td>
                                                            Details:
                                                        </td>
                                                        <td>';
                                                            echo $row["description"];
                                                        echo '</td>
                                                        </tr>';
                                                    echo '<tr>
                                                        <td>
                                                            Contact:
                                                        </td>
                                                        <td>';
                                                            echo $row["phno"];
                                                        echo '</td>
                                                        </tr>'; 
                                                    echo '<tr>
                                                        <td>
                                                            MailId:
                                                        </td>
                                                        <td>';
                                                            echo '<a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to='.$row["mailId"].'" target="_blank">Send Mail</a>';                                                            
                                                        echo '</td>
                                                    </tr>'; 
                                                    echo '<tr>
                                                        <td>
                                                            Tech Stack:
                                                        </td>
                                                        <td>';
                                                            echo $row["tech_stack"];
                                                        echo '</td>
                                                    </tr>'; 
                                                    echo '<tr>
                                                        <td>
                                                            Investment Needed:
                                                        </td>
                                                        <td>';
                                                            echo $row["investment_needed"];
                                                        echo '</td>
                                                    </tr>'; 
                                                    echo '<tr>
                                                        <td>
                                                            Return On Investment:
                                                        </td>
                                                        <td>';
                                                            echo $row["ROI"];
                                                        echo '</td>
                                                    </tr>'; 
                                                    echo '<tr>
                                                        <td>
                                                            Project Upload Date:
                                                        </td>
                                                        <td>';
                                                            echo $row["pdate"];
                                                        echo '</td>
                                                    </tr>'; 

                                                    echo ' </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div></td>';
                                    }
                                    else if($item==="developing"){
                                        if($row[$item]==1){
                                            echo '<td style="color:red;" class="colomn_border">' . 'Developing' . '</td>';
                                        }
                                        else{
                                            echo '<td style="color:green;" class="colomn_border">' . 'Developed' . '</td>';   
                                        }
                                    }
                                    else{
                                        echo '<td class="colomn_border">' . $row[$item] . '</td>'; //get items using property value
                                    }
                                    $i++;
                                }
                                echo '</tr>';
                            }
                            ?>
                        </tr>                
                    </tbody>
                </table>
                <ul class="pagination">
                <?php  
                $sql = "SELECT COUNT(*) FROM $table";  
                $rs_result = mysqli_query($connection,$sql);  
                $row = mysqli_fetch_row($rs_result);  
                $total_records = $row[0];  
                  
                // Number of pages required.
                $total_pages = ceil($total_records / $limit);  
                $pagLink = "";                        
                for ($i=1; $i<=$total_pages; $i++) {
                  if ($i==$pn) {
                      $pagLink .= "<li class='active'><a href='$page.php?page="
                                                        .$i."'>".$i."</a></li>";
                  }            
                  else  {
                      $pagLink .= "<li><a href='$page.php?page=".$i."'>
                                                        ".$i."</a></li>";  
                  }
                };  
                echo $pagLink;  
              ?>
              </ul>
            </div>
        </section>
<?php
}else echo "<h1>Please login first .</h1>";
?>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script type="text/javascript" src="https://www.sih.gov.in/js/bootstrap.js"></script>
    </body>
</html>