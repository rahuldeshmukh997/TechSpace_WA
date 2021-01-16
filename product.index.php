<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Custome CSS -->
    <link rel="stylesheet" href="css/style.css"> 

    <link href="css/product.style.css" rel="stylesheet" type="text/css">
	<link href="css/product.reviews.css" rel="stylesheet" type="text/css">

    <title>TechSpace | Home</title>
		
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

        <!--====================================================== Start Product Review ========================================================================  -->    
        <div class="container mt-5">
            <nav class="navtop">
                <div>
                    <h1>Reviews System</h1>
                </div>
            </nav>
            </div>   
            <div class="content home">
                <h2>Reviews</h2>
                <p>Check out the below reviews for our website.</p>
                <div class="reviews"></div>
                <script>
                    const reviews_page_id = 1;
                    fetch("reviews.php?page_id=" + reviews_page_id).then(response => response.text()).then(data => {
                        document.querySelector(".reviews").innerHTML = data;
                        document.querySelector(".reviews .write_review_btn").onclick = event => {
                            event.preventDefault();
                            document.querySelector(".reviews .write_review").style.display = 'block';
                            document.querySelector(".reviews .write_review input[name='name']").focus();
                        };
                        document.querySelector(".reviews .write_review form").onsubmit = event => {
                            event.preventDefault();
                            fetch("reviews.php?page_id=" + reviews_page_id, {
                                method: 'POST',
                                body: new FormData(document.querySelector(".reviews .write_review form"))
                            }).then(response => response.text()).then(data => {
                                document.querySelector(".reviews .write_review").innerHTML = data;
                            });
                        };
                    });
                </script>
            </div>
        </div>    
        <!--====================================================== End Product Review ========================================================================  -->
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
