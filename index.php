<?php
    include_once 'header.php'
?>

    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custome CSS -->
        <!-- <link rel="stylesheet" href="/css/style.css">  -->
        <link href="css/signup.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

        <title>TechSpace | Home</title>
    </head>
    <body>
        <!--====================================================== Navigation Bar ========================================================================  -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/index.html">
                    <img src="/images/crop.jpg" alt="" width="30" height="24" class="d-inline-block align-top">
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
                                <a class="nav-link" aria-current="page" href="/index.html">Home</a>
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
                                <a class="nav-link" href="/article.html">Article</a>
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
                            <li class="nav-item ms-5">
                                <a class="nav-link" href="#">About Us</a>
                            </li>    
                            <li class="nav-item ms-5">
                                <a class="nav-link" href="/signup.php">Sign Up</a>
                            </li>    
                            <li class="nav-item ms-5">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>    
                        </ul>
                    </div>
                </div>    
            </div>
        </nav>

        <!--====================================================== End Navigation Bar ========================================================================  -->

        <!--====================================================== News Content ========================================================================  -->

        <div class="container-fluid">
            <div class="row">
                <div class="news-1">
                    <rssapp-wall id="VKfbIdtm7evBvq80"></rssapp-wall><script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                </div>
            </div>   
            <div class="row"> 
                <div class="news-2">
                    <rssapp-wall id="jvX3M63UiWHhtZwz"></rssapp-wall><script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                </div>
            </div>
        </div>

        <!--====================================================== End News Content ========================================================================  -->

        <!-- jQuery File -->
        <script src="/js/jquery.min.js"></script>
        
        <!-- Bootstrap jQuery file -->
        <script src="/js/bootstrap.min.js"></script>
    </body>
    </html>

<?php
    include_once 'footer.php'
?>