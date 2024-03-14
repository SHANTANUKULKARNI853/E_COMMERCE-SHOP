<?php
$servername = "localhost";
$email = "root"; // replace with your actual MySQL username
$password = ""; // replace with your actual MySQL password
$dbname = "dx_1";

// Create connection
$conn = new mysqli($servername, $email, $password, $dbname);

if($conn->connect_error){
die('coonection failed :'. $conn->connect_error);
}

?>
