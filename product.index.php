<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/product.style.css" rel="stylesheet" type="text/css">
	<link href="css/product.reviews.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custome CSS -->
    <link rel="stylesheet" href="css/style.css"> 
    
    
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
        <div class="container-fluid">
            <div class="row">
                <nav class="navtop">
                    <div>
                        <h1>Reviews System</h1>
                    </div>
                </nav>
            </div>
            <div class="row">    
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
        </div>    
        <!--====================================================== End Product Review ========================================================================  -->

        <!-- jQuery File -->
        <script src="js/jquery.min.js"></script>
    
        <!-- Bootstrap jQuery file -->
        <script src="js/bootstrap.min.js"></script>

	</body>
</html>
