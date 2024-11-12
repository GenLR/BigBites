<?php include('include/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form class="register">
        <div class="area">
            <div class="area__socials">
                <img src="image/facebook.png" alt="facebook" width="30px">
                <p>Sign up with Facebook</p>
            </div>
            <div class="area__socials">
                <img src="image/google.png" alt="google" width="30px">
                <p>Sign in with Google</p>
            </div>   
        </div>
        <p class="text">Or</p>
        <div class="area" id="area_name">
            <div class="area__field">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname"> 
            </div>
            <div class="area__field">
                <label for="fname">Last Name</label>
                <input type="text" name="lname" id="lname">
            </div> 
        </div>
        <div class="area" id="area_age">
            <div class="area__field">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" min="0" max="200">
            </div>
            <div class="area__field">
                <label for="birth">Birthday</label>
                <input type="date" id="birth">
            </div>
        </div>
        <div class="area" id="area_contacts">
            <div class="area__field">
                <label for="email">Email</label>
                <input type="email" id="email">
            </div>
            <div class="area__field">
                <label for="contact">Contact No.</label>
                <input type="tel" name="contact" id="contact">
            </div>
        </div>
        <div class="area" id="area_account">
            <div class="area__field">
                <label for="username">Username</label>
                <input type="text" id="username">
            </div>
            <div class="area__field">
                <label for="password">Password</label>
                <input type="text" id="password" minlength="8" maxlength="50" placeholder="must contain 8 characters">
            </div>
        </div>
        <div class="gender_group">
            <p>Gender</p>
            <div class="gender_option">
                <div>
                    <input type="radio" id="male" value="name" name="gender">
                    <label for="male">Male</label>
                </div>
                <div>
                    <input type="radio" id="female" value="female" name="gender">
                    <label for="female">Female</label>
                </div>
                <div>
                    <input type="radio" id="RND" value="RND" name="gender">
                    <label for="RND">Rather not disclose</label>
                </div>
            </div>
        </div>
        <a href="signin.html" class="btn"><button class="btn__name">SIGN UP</button></a>
    </form>
</body>
</html>
    