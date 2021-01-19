<?php

    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Custome CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/queries_style.css">

    <!-- Responsive CSS File -->
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Footer CSS -->
    <link rel="stylesheet" href="css/footer.css"> 
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <title>TechSpace | View Blog</title>
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
                            <a class="nav-link" href="index.php">Blog</a>
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

    <!--====================================================== Start View Blog ========================================================================  -->
    <div class="pt-5">
        <div class="container mt-5">

            <?php foreach($query as $q){?>
                <div class="bg-dark p-5 rounded-lg text-white text-center">
                    <h1><?php echo $q['title'];?></h1>

                    <div class="d-flex mt-2 justify-content-center align-items-center">
                        <a href="edit.php?id=<?php echo $q['id']?>" class="btn btn-light btn-sm" name="edit">Edit</a>
                        <form method="POST">
                            <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                            <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                        </form>
                    </div>

                </div>
                <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content'];?></p>
            <?php } ?>    

            <a href="index.php" class="btn btn-outline-dark my-3">Go Home</a>
        </div>
    </div>

   <!--====================================================== End View Blog ========================================================================  -->
    
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
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!-- jQuery File -->
    <script src="js/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <!-- Bootstrap jQuery file -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>