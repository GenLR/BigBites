<?php
// login.php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example: Hardcoded username and password check (replace with actual logic)
    if ($username == 'admin' && $password == 'password') {
        echo "Login successful!";
        // Redirect to dashboard or home page
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid credentials!";
    }
}
?>


