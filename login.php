<?php
require_once 'include/autoloader.php';

session_start();

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? null;
    $password = $_POST['pass'] ?? null;

    if (!$email || !$password) {
        echo json_encode(['success' => false, 'message' => 'Email or password is missing.']);
        exit;
    }

    try {
        $user = new User();
            $loggedInUser = $user->login($email, $password);

            // If login is successful
            $_SESSION['user'] = $loggedInUser;
    
            echo json_encode([
                'success' => true,
                'message' => 'Login successful',
                'redirect' => $loggedInUser['acc_type'] === 'admin' ? 'admin/admin.php' : 'index.php',
            ]);
            exit;
        } catch (Exception $e) {
            echo json_encode([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
            exit;
        }
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Invalid request method.',
        ]);
        exit;
    }

?>




