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
                <p>Already have Account ?<a href="/login.php"><b> Login</b></a></p>
            </span>
        </form>
    </body>
    </html> 

<?php
    include_once 'footer.php'
?> 