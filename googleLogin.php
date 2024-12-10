<?php
require __DIR__ . "/vendor/autoload.php";
require __DIR__ . '/include/autoloader.php';

session_start();


$client = new Google\Client;

$client->setClientId("1017558179869-627tt4p3p3cfm6jo2q3jd8tpfg4nekk3.apps.googleusercontent.com");
$client->setClientSecret("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");
$client->setRedirectUri("http://localhost/BigBites/googleLogin.php");

if (!isset($_GET['code']) || empty($_GET['code'])) {
    die('Authorization code is missing or invalid.');
}

if (isset($token['error'])) {
    throw new Exception('Error fetching access token: ' . $token['error']);
}

$token = $client->fetchAccessTokenWithAuthCode($_GET["code"]);

$client->setAccessToken($token["access_token"]);

$oauth = new Google\Service\Oauth2($client);

$userinfo = $oauth->userinfo->get();

$_SESSION['user'] = $userinfo;

$user = new User();

if ($user->isEmailUnique($userinfo->email)) {
    $password = "loggedinwithgoogle";
    $user->register($userinfo->name, $userinfo->email, $password);
    header("Location: landingpage.php");
    exit();
} else {
    header("Location: landingpage.php");
    exit();
}