<?php
// login.php
require __DIR__ . "/vendor/autoload.php";

$client = new Google\Client;

$client->setClientId("1017558179869-ecnnff4unleha97p88lqih9nnah92b6f.apps.googleusercontent.com");
$client->setClientSecret("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 ");
$client->setRedirectUri("http://localhost/BigBites/login.php");

$client->addScope("email");
$client->addScope("profile");

$url = $client->createAuthUrl();



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


