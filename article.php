<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custome CSS -->
    <link rel="stylesheet" href="css/style.css"> 
    
    <title>TechSpace | Home</title>

    <style type="text/css">
        body h1{ font: 24px sans-serif; text-align: center; }
    </style>
    
  </head>
  <body>
    <!--====================================================== Navigation Bar ========================================================================  -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.html">
                <img src="images/crop.jpg" alt="" width="30" height="24" class="d-inline-block align-top">
                <span>TechSpace</span> 
            </a>
            <!-- <a class="navbar-brand" href="#">TechSpace</a> -->
            <div class="float-end">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item ms-5">
                            <a class="nav-link" aria-current="page" href="welcome.php">Home</a>
                        </li>
                        <li class="nav-item dropdown ms-5">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Knoledge</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Gain Knowledge</a></li>
                                <li><a class="dropdown-item" href="#">Technical Quiz</a></li>
                                <!-- <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                            </ul>
                        </li>
                        <li class="nav-item ms-5">
                            <a class="nav-link" href="article.html">Article</a>
                        </li>
                        <li class="nav-item ms-5">
                            <a class="nav-link" href="#">Product Reviews</a>
                        </li>
                        <li class="nav-item dropdown ms-5">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Queries</a>
                            <ul class="dropdown-menu mr-5" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Repair Center</a></li>
                                <li><a class="dropdown-item" href="#">Authorized seller</a></li>
                                <!-- <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                            </ul>
                        </li>  
                        <li class="nav-item dropdown ms-5">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
                            <ul class="dropdown-menu mr-5" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="reset-password.php">Reset Password</a></li>
                                <li><a class="dropdown-item" href="logout.php">Sign Out</a></li>
                            </ul>
                        </li>  
                        <li class="nav-item ms-5">
                            <a class="nav-link" href="#">About Us</a>
                        </li>    
                        
                    </ul>
                </div>
            </div>    
        </div>
    </nav>

    <!--====================================================== End Navigation Bar ========================================================================  -->

    <!--====================================================== News Content ========================================================================  -->
 

    <!--====================================================== End News Content ========================================================================  -->

    <!-- jQuery File -->
    <script src="js/jquery.min.js"></script>
    
    <!-- Bootstrap jQuery file -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>