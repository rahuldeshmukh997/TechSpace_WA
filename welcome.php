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
    <link rel="stylesheet" href="css/queries_style.css">
    <link rel="stylesheet" href="css/popup.css">

    <!-- Responsive CSS File -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Footer CSS -->
    <link rel="stylesheet" href="css/footer.css"> 
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    
    <title>TechSpace | Home</title>

    <style type="text/css">
        body h1{ font: 24px sans-serif; text-align: center; }
    </style>
    
  </head>
  <body>
    <!--====================================================== Navigation Bar ========================================================================  -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="welcome.php">
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
                                <li><a class="dropdown-item" href="gain.php">Gain Knowledge</a></li>
                                <li><a class="dropdown-item" href="quiz.index.php">Technical Quiz</a></li>
                                <!-- <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                            </ul>
                        </li>
                        <li class="nav-item ms-5">
                            <a class="nav-link" href="index.php">Blog</a>
                        </li>
                        <li class="nav-item ms-5">
                            <a class="nav-link" href="product.index.php">Product Reviews</a>
                        </li>
                        <li class="nav-item dropdown ms-5">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Queries</a>
                            <ul class="dropdown-menu mr-5" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="repair.php">Repair Center</a></li>
                                <li><a class="dropdown-item" href="seller.php">Authorized seller</a></li>
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
                            <a class="nav-link" href="about_us.php">About Us</a>
                        </li>    
                        
                    </ul>
                </div>
            </div>    
        </div>
    </nav>

    <!--====================================================== End Navigation Bar ========================================================================  -->

    <!--====================================================== News Content ========================================================================  -->
    
    <!-- ============================================================================================================================================== -->
    <div class="popup">
        <div id="boxes">
            <div style="top: 50%; left: 50%; display: none;" id="dialog" class="window"> 
                <div id="san">
                    <a href="#" class="close agree"><img src="images/close-icon.png" width="25" style="float:right; margin-right: -25px; margin-top: -20px;"></a>
                    <p>
                        <h1>Disclaimer</h1><br>
                        <h2>Welcome to TechSpace,</h2><br>
                        This Website is a part of <b style="font-weight: 500;">College Academic Project</b> for educational purposes. We do not want to breach any privacy policies or copyright from any organisation or company.<br>If you have any concerns or questions please contact us on Email:<br>ssdeshmukh4015@gmail.com<br>rushivhatkar123@gmail.com
                        

                    </p>
                </div>
            </div>
            <div style="width: 2478px; font-size: 32pt; color:white; height: 1202px; display: none; opacity: 0.4;" id="mask"></div>
        </div>
    </div>
    
    
    
    <!-- ================================================================================================================================================ -->
    <div class="pt-5">
        <div class="mt-5">
            <div class="page-header">
                <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to TechSpace.</h1>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="news-1">
                        <rssapp-wall id="VKfbIdtm7evBvq80"></rssapp-wall><script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                    </div>
                </div>   
                <div class="row"> 
                    <div class="news-2">
                        <rssapp-wall id="PeNNCXa9qXfMNI9D"></rssapp-wall><script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================================================== End News Content ========================================================================  -->

    <!--====================================================== Start Footer ========================================================================  -->

	<footer class="footer-distributed">

        <div class="footer-left">
            <!-- <h3>Tech<span>Space</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="#">Blog</a>
                |
                <a href="#">Reviews</a>
                |
                <a href="#">About</a>
            </p>

            <p class="footer-company-name">© 2021 TechSpace<br>Developed by Suyash Deshmukh</p> -->
        </div> 

        <div class="footer-center">
            <!-- <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Dombivli</span>
                    Mumbai</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+91 9898989898</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@TechSpace.com">support@TechSpace.com</a></p>
            </div> -->
            <h3>Tech<span>Space</span></h3>

            <!-- <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="#">Blog</a>
                |
                <a href="#">Reviews</a>
                |
                <a href="#">About</a>
            </p><br>   -->

            <br><p class="footer-company-name">© 2021 TechSpace <br> Developed by Suyash Deshmukh & Suyash Deshmukh</p>
        </div>
        <!-- <div class="footer-right">
            <p class="footer-company-about">
                <span>About TechSpace</span>
                Techspace as name suggests provide all the technology or technical related information at one place.</p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div> 
        </div>  -->
    </footer>


<!--====================================================== End Footer ========================================================================  -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> 
    <script src="js/popup.js"></script>

    <!-- jQuery File -->
    <script src="js/jquery.min.js"></script>
    
    <!-- Bootstrap jQuery file -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>