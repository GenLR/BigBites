<?php include('include/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
</head>
<body>
    <div class="page_contents">   
        <form class="login">    
            <label>Username</label>
            <input type="text" placeholder="">
            <label>Password</label>
            <input type="password" placeholder="">
        </form>    
            <div class="more">
                <label><input type="checkbox">Remember me</label>
                <a href="">Forget Password?</a>
            </div>
        <a href="signup.php" class="btn"><button class="btn__name">SIGN IN</button></a>
        <p>No Account Yet?</p>
        <a href="signup.php">SIGN UP</a>
    </div>
</body>
</html>


