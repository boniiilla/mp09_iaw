<?php
session_start();
require('connection.php');

$username = $_POST['username'];
$password = $_POST['password'];
$hash = password_hash($password, PASSWORD_DEFAULT);

// Prepare statement to prevent SQL injection
$stmt = $conn->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
$stmt->bind_param("ss", $username, $hash);

if ($stmt->execute()) {
    header('Location: form_login.php');
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
