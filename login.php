<?php
require_once '../include/autoloader.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $user = new User();

    try {
        $loggedInUser = $user->login($username, $password);
        
        // Store user data in session
        $_SESSION['user'] = $loggedInUser;

        if($loggedInUser['acc_type']== "admin"){
            header("Location: admin/admin.php");
            exit;
        } else {
            header("Location: dashboard.php");
            exit;
        }
        // Redirect to dashboard or homepage
        
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

?>




