<!-- header.php -->
<?php 
require __DIR__ . "../../vendor/autoload.php";

$client = new Google\Client;

$client->setClientId("1017558179869-ecnnff4unleha97p88lqih9nnah92b6f.apps.googleusercontent.com");
$client->setClientSecret("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 ");
$client->setRedirectUri("http://localhost/BigBites/login.php");

$client->addScope("email");
$client->addScope("profile");

$url = $client->createAuthUrl();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigBites</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">
 
</head>
<body>

    <header class="header">
        <div class="logo">
            <img src="image/logo.png" alt="" width = '60px'>
            <h1><span class="big">BIG</span><span class="bites">BITES</span></h1>
        </div>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#">Restaurants</a>
            <a href="#">Contact Us</a>
            <button onclick="openModal('login')" class="order-btn">LOGIN</button>
        </nav>
    </header>


    <section class="PopUpLogin">   
        <div class="modal-overlay" id="modalOverlay">
            <div class="modal" id="loginModal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <div class="modal-header">
                        <h2>Welcome Back!</h2>
                        <p>Sign in to continue ordering delicious food</p>
                    </div>
                    <form class="login-form">
                        <div class="form-group">
                            <input type="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" required>
                        </div>
                        <div class="form-group forgot">
                            <a href="#" class="forgot-password">Forgot Password?</a>
                        </div>
                        <button type="submit" class="submit-btn">Login</button>
                    </form>
                    <div class="social-login">
                        <p>Or continue with</p>
                        <div class="social-buttons">
                            <a href="<?= $url ?>" class="social-btn google"><i class="fab fa-google"></i>Google</a>
                        </div>
                    </div>
                    <div class="switch-form">
                        <p>Don't have an account? <a href="#" onclick="switchModal('signup')">Sign Up</a></p>
                    </div>
                </div>
            </div>

            <div class="modal" id="signupModal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <div class="modal-header">
                        <h2>Create Account</h2>
                        <p>Join us for the best food delivery experience</p>
                    </div>
                    <form class="signup-form">
                        <div class="form-group">
                            <input type="text" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Confirm Password" required>
                        </div>
                        <button type="submit" class="submit-btn">Create Account</button>
                    </form>
                    <div class="social-login">
                        <p>Or continue with</p>
                        <div class="social-buttons">
                            <a href="<?= $url ?>" class="social-btn google"><i class="fab fa-google"></i>Google</a>
                        </div>
                    </div>
                    <div class="switch-form">
                        <p>Already have an account? <a href="#" onclick="switchModal('login')">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/login.js"></script>
</body>
</html>
