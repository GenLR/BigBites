<?php
require_once '../include/autoloader.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];


    $user = new User();

    if ($user->isEmailUnique($email)) {
        $userId = $user->register($name, $contact, $email, $password);
        echo "Registration successful! Your User ID is: $userId";
    } else {
        echo "Username is already taken. Please choose a different one.";
    }
}
?>
