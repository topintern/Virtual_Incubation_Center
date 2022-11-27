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
    
    <title>Virtual Incubation Center</title>
    <link rel="icon" href="../img/logo.png" type="image/icon type">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#"><img src="../img/logo.png" height="30" width="41" alt="logo"></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-info fa-lg"></span> Register User</a></li>
                    <li class="nav-item"><a class="nav-link" href="./addInvestor.php"><span class="fa fa-info fa-lg"></span> Register Investor</a></li>
                    <li class="nav-item"><a class="nav-link" href="./addMentor.php"><span class="fa fa-info fa-lg"></span> Register Mentor</a></li>
                </ul>
                <span class="navbar-text">
                    <a class="nav-link" href="../login.php" target="_blank">
                        <span class="fa fa-sign-in"></span> Login
                    </a>
                </span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <br>
    <div class="container">
        <form action="insertUsers.php" method="post">
            <table cellpadding="6" cellspacing="12"  width="80%">
                <tr>
                    <th style="color:blue">Add a VIC User:</th>
                </tr>
                <tr>
                    <td class="txt"><b>Enter name of the user:</b></td>
                    <td>
                        <input type="text" id="name" name="name"  size="25" required>
                    </td>
                </tr>
                <tr>
                    <td class="txt"><b>Enter user email:</b>(username)</td>
                    <td><input type="email" id="email" name="email" size="25" required></td>
                </tr>
                <tr>
                    <td class="number"><b>Enter user phone number:</b></td>
                    <td><input type="tel" id="phone" name="phone" pattern="[0-9]{10}" size="25" required></td>
                </tr>
                <tr>
                    <td class="txt"><b>Enter user's experience in years:</b></td>
                    <td><input  name = "exp" size="25" required></input></td>
                </tr>
                <tr>
                    <td class="txt"><b>Enter mentor gender:</b></td>
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
                    <td class="txt"><b>Enter User Location:</b></td>
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
                    <td class="txt"><b>User Description:</b></td>
                    <td><textarea  rows = "5" cols = "40" minLength="0" maxlength = "200" name = "description"></textarea></td>
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