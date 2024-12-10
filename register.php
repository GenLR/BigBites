<?php
require_once 'include/autoloader.php';

session_start();

header('Content-Type: application/json');  // Set the response type to JSON

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];



    $user = new User();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (empty($name) || empty($email) || empty($pass) || empty($cpass)) {
            echo json_encode(['success' => false, 'message' => 'All fields are required!']);
            exit;
        } else if (!$user->isEmailUnique($email)) {
            echo json_encode(['success' => false, 'message' => 'Email already taken!']);
            exit;
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(['success' => false, 'message' => 'Invalid Email Format!']);
            exit;
        }else if ($pass != $cpass) {
            echo json_encode(['success' => false, 'message' => "Passwords aren't match!"]);
            exit;
        } else {
            echo json_encode(['success' => true, 'message' => ' Successful Registration!']);
            $userId = $user->register($name, $email, $pass);
                try {

                    $loggedInUser = $user->login($email, $pass);
                    
                    // Store user data in session
                    $_SESSION['user'] = $loggedInUser;
                    exit;          
                } catch (Exception $e) {
                    $error = $e->getMessage();
                }
            exit;
        }
    }
?>