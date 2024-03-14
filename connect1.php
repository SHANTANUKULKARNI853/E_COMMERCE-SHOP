<?php
$host = "localhost";
$email = "root"; // replace with your actual MySQL username
$password = ""; // replace with your actual MySQL password
$database = "dx_2";

// Create connection
$conn = new mysqli($host, $email, $password,$database);

if($conn->connect_error){
die('coonection failed :'. $conn->connect_error);
}

?>
