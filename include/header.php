<!-- header.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOS</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
 
</head>
<body>

    <nav class="navbar">
        <div class="nav__container">
            <a href="index.php" class="nav__logo">
                F<span>O</span>S
            </a>
            <label for="check" class="checkbox">
                <i class="fa-solid fa-bars"></i>
            </label>
            <input type="checkbox" name="check" id="check">
            <ul class="nav__menu">
                <li class="nav__item">
                    <a href="index.php" class="nav__links">HOME</a>
                </li>
                <li class="nav__item">
                    <a href="search.php" class="nav__links">SEARCH</a>
                </li>
                <li class="nav__item">
                    <!-- Login Button from modal -->
                    <button onclick="openModal('login')" class="order-btn">LOGIN</button>
                </li>
            </ul>
        </div>
    </nav>

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
                            <button class="social-btn google"><i class="fab fa-google"></i>Google</button>
                            <button class="social-btn facebook"><i class="fab fa-facebook"></i>Facebook</button>
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
                        <div class="form-group terms">
                            <label>
                                <input type="checkbox" required>
                                I agree to the <a href="#">Terms & Conditions</a>
                            </label>
                        </div>
                        <button type="submit" class="submit-btn">Create Account</button>
                    </form>
                    <div class="social-login">
                        <p>Or continue with</p>
                        <div class="social-buttons">
                            <button class="social-btn google"><i class="fab fa-google"></i>Google</button>
                            <button class="social-btn facebook"><i class="fab fa-facebook"></i>Facebook</button>
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
