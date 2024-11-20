<!-- header.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOS</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js"></script>

    <style>
      
    /* Modal Background (overlay) */
    .modal {
        display: none;  /* Hidden by default */
        position: fixed;
        z-index: 9999;  /* Ensure modal is on top */
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);  /* Semi-transparent background */
    }

    /* Modal Content (the white box with login form) */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 400px;
        box-sizing: border-box;  /* Ensures padding and width work together */
        border-radius: 8px;  /* Adds rounded corners to the modal */
    }

    /* Close button styles */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    /* Form inputs */
    input[type="text"],
    input[type="password"],
    input[type="submit"] {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;  /* Ensures the input text is properly sized */
    }

    /* Button styling */
    .login-btn {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        background-color: #4CAF50;  /* Green color */
        color: white;
        border: none;
        border-radius: 4px;
        transition: background-color 0.3s ease; /* Smooth hover effect */
    }

    .login-btn:hover {
        background-color: #45a049;  /* Darker green on hover */
    }

    </style>

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
                    <button id="loginBtn" class="login-btn">LOG IN</button>
                </li>
            </ul>
        </div>
    </nav>

    <!-- The Modal (pop-up login form) -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required><br>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required><br>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>

    <script>
        // Modal display logic
        var modal = document.getElementById("loginModal");
        var btn = document.getElementById("loginBtn");
        var span = document.getElementsByClassName("close")[0];

        // Open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // Close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // Close the modal if clicked outside
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
