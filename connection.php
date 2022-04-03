<?php
$servername = "localhost";
$username = "root";
$password = "password";
$database = "first_db";

$conn = new mysqli($servername, $username, $password, $database) or die($conn->error);
?>
