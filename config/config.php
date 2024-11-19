<?php

//main connection file for both admin & front end
$db_server = "localhost"; //server
$db_user= "root"; //username
$db_pass = ""; //password
$db_name = "fos_db";  //database

// Create connection
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name); // connecting 
// Check connection
if (!$conn) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
    echo 'you NOT are connected';
} else {
    echo 'you are connected';
}
    echo 'okay';

?>

