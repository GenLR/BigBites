<!-- header.php -->
<?php 
require __DIR__ . "../../vendor/autoload.php";

session_start();

$client = new Google\Client;

$client->setClientId("1017558179869-627tt4p3p3cfm6jo2q3jd8tpfg4nekk3.apps.googleusercontent.com");
$client->setClientSecret("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");
$client->setRedirectUri("http://localhost/BigBites/googleLogin.php");

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
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">
 
</head>
<body>

<header class="header">
    <div class="logo">
        <img src="images/logo.png" alt="" width='60px'>
        <h1><span class="big">BIG</span><span class="bites">BITES</span></h1>
    </div>
    <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="landingpage.php">Locations</a>
        <a href="mealpage.php">Order Meal</a>
        <?php 
            if (empty($_SESSION)) {
                echo "<button onclick=\"openModal('login')\" class='order-btn'>LOGIN</button>";
            } else {
                echo "<button onclick=\"window.location.href='logout.php';\" class='order-btn'>LOGOUT</button>";
            }
        ?>
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
                        <p id="loginErrorMessage" class="error"></p>
                        <p id="loginSuccessMessage" class="success"></p>
                    </div>
                    <form class="login-form" onsubmit="return handleLoginSubmit(event)">
                        <div class="form-group">
                            <input type="email" name="lemail" id="lemail" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="lpass" id="lpass" placeholder="Password" required>
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
                        <p id="signupErrorMessage" class="error"></p>
                        <p id="signupSuccessMessage" class="success"></p>
                    </div>
                    <form class="signup-form" onsubmit="return handleRegisterSubmit(event)">
                        <div class="form-group">
                            <input type="text" name="rname" id="rname" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="remail" id="remail" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="rpass" id="rpass" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="rcpass" id="rcpass" placeholder="Confirm Password" required>
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

    <script src="js/popup.js"></script>
    <script src="js/login.js"></script>
    <script src="js/register.js"></script>
</body>
</html>
