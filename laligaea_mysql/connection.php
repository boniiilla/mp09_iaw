<?php
$servername = "localhost";
$database = "laligaea";
$username = "bonilla";
$password = "@Bonilla2005";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>