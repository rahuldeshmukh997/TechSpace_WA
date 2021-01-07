<?php
    include_once 'header.php'
?>   
   <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TechSpace | Login</title>
        <!-- <link rel="stylesheet" href="/css/login_style.css"> -->
        <link href="css/signup.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <form action="includes/login.inc.php" class="box">
            <h1>Login</h1>
            <input type="text" name="name" placeholder="Full Name / Email">
            <input type="password" name="pwd" placeholder="Password">
            <input type="submit" name="" value="Login"> 
            <button type="button" name="" value="Sign Up"><a href="/signup.html">Sign Up</a></button>
        </form>
    </body>
    </html>
<?php
    include_once 'footer.php'
?> 