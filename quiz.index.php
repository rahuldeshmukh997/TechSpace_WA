<!DOCTYPE>
<html>
  <?php require 'dbconfig.php';
  session_start(); ?>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custome CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/queries_style.css">
  <link rel="stylesheet" href="css/index.css">

  <!-- Responsive CSS File -->
  <link rel="stylesheet" href="css/responsive.css">
    
  <!-- Footer CSS -->
  <link rel="stylesheet" href="css/footer.css"> 
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <title>TechSpace | Quiz</title>

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

    <div class="container-fluid">
        <?php 															
            if (isset($_POST['click']) || isset($_GET['start'])) {
            @$_SESSION['clicks'] += 1 ;
            $c = $_SESSION['clicks'];
            if(isset($_POST['userans'])) { $userselected = $_POST['userans'];
            $fetchqry2 = "UPDATE `quiz` SET `userans`='$userselected' WHERE `id`=$c-1"; 
            $result2 = mysqli_query($con,$fetchqry2);
            }
            } else {
            $_SESSION['clicks'] = 0;
            }
            //echo($_SESSION['clicks']);
            ?>
        <div class="bump"><br><form><?php if($_SESSION['clicks']==0){ ?> <button class="button" name="start" float="left"><span>START QUIZ</span></button> <?php } ?></form></div>
        <form action="" method="post">  				
        <table><?php if(isset($c)) {   $fetchqry = "SELECT * FROM `quiz` where id='$c'"; 
                $result=mysqli_query($con,$fetchqry);
                $num=mysqli_num_rows($result);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC); }
                ?>
            <tr><td><h3><br><?php echo @$row['que'];?></h3></td></tr> <?php if($_SESSION['clicks'] > 0 && $_SESSION['clicks'] < 6){ ?>
            <tr><td><input required type="radio" name="userans" value="<?php echo $row['option 1'];?>">&nbsp;<?php echo $row['option 1']; ?><br>
            <tr><td><input required type="radio" name="userans" value="<?php echo $row['option 2'];?>">&nbsp;<?php echo $row['option 2'];?></td></tr>
            <tr><td><input required type="radio" name="userans" value="<?php echo $row['option 3'];?>">&nbsp;<?php echo $row['option 3']; ?></td></tr>
            <tr><td><input required type="radio" name="userans" value="<?php echo $row['option 4'];?>">&nbsp;<?php echo $row['option 4']; ?><br><br><br></td></tr>
            <tr><td><button class="button3" name="click" >Next</button></td></tr> <?php }  
            ?> 
            <form>
        <?php if($_SESSION['clicks']>5){ 
            $qry3 = "SELECT `ans`, `userans` FROM `quiz`;";
            $result3 = mysqli_query($con,$qry3);
            $storeArray = Array();
            while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
            if($row3['ans']==$row3['userans']){
            @$_SESSION['score'] += 1 ;
            }
        }
        
        ?> 
        <h2>Result</h2>
        <span>No. of Correct Answer:&nbsp;<?php echo $no = @$_SESSION['score']; 
        session_unset(); ?></span><br>
        <span>Your Score:&nbsp<?php echo $no*2; ?></span>
        <?php } ?>
    </div>
  
<!--====================================================== Start Footer ========================================================================  -->

  

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