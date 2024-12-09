<?php
require_once 'include/autoloader.php';

session_start();
ini_set('display_errors', 0);
error_reporting(0);
ob_start();


header('Content-Type: application/json');

    $email = trim($_POST['email']);
    $password = trim($_POST['pass']);

    $user = new User();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    try {
        $loggedInUser = $user->login($email, $password);

        // Store user data in session
        $_SESSION['user'] = $loggedInUser;

        if($loggedInUser['acc_type']== "admin"){
            header("Location: admin/admin.php");
            exit;
        } else {
            exit;
        }
        // Redirect to dashboard or homepage
        
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

?>




