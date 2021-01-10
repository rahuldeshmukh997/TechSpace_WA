<?php
    include_once 'header.php'
?> 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TechSpace | Login</title> -->
        <!-- <link rel="stylesheet" href="/css/signup.css">   -->
        <link href="css/signup.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    </head>
    <body>
        
        <form action="includes/signup.inc.php" class="box" method="POST">
            <h1>Sign Up</h1>
            <input type="text" name="name" placeholder="Full Name">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdrepeat" placeholder="Confirm Password">
            <!-- <input type="submit" name="submit" value="Sign Up">  -->
            <button type="submit" name="submit" value="Sign Up">Sign Up</button>
            
            <span>
                <p>Already have Account ?<a href="login.php"><b> Login</b></a></p>
                <?php

                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyinput"){
                            echo "<p>Fill in all fields !</p>";
                        }
                        else if ($_GET["error"] == "invalidUid") {
                            echo "<p>Choose a proper username !</p>";
                        }
                        else if ($_GET["error"] == "invalidEmail") {
                            echo "<p>Choose a proper Email !</p>";
                        }
                        else if ($_GET["error"] == "passwordsdontmatch") {
                            echo "<p>Passwords doesn't match !</p>";
                        }
                        else if ($_GET["error"] == "stmtfailed") {
                            echo "<p>Something went wrong !</p>";
                        }
                        else if ($_GET["error"] == "usernametaken") {
                            echo "<p>User name already taken !</p>";
                        }
                        else if ($_GET["error"] == "none") {
                            echo "<p>You have signed up !</p>";
                        }
                    }
                ?>
            </span>
        </form>
             
        <?php

            // if(isset($_GET["error"])){
            //     if($_GET["error"] == "emptyinput"){
            //         echo "<p>Fill in all fields !</p>";
            //     }
            //     else if ($_GET["error"] == "invalidUid") {
            //         echo "<p>Choose a proper username !</p>";
            //     }
            //     else if ($_GET["error"] == "invalidEmail") {
            //         echo "<p>Choose a proper Email !</p>";
            //     }
            //     else if ($_GET["error"] == "passwordsdontmatch") {
            //         echo "<p>Passwords doesn't match !</p>";
            //     }
            //     else if ($_GET["error"] == "stmtfailed") {
            //         echo "<p>Something went wrong !</p>";
            //     }
            //     else if ($_GET["error"] == "usernametaken") {
            //         echo "<p>User name already taken !</p>";
            //     }
            //     else if ($_GET["error"] == "none") {
            //         echo "<p>You have signed up !</p>";
            //     }
            // }
        ?>
  
    </body>
    </html> 

<?php
    include_once 'footer.php'
?> 