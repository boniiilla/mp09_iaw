<?php
session_start();
require('connection.php');

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare('SELECT password FROM users WHERE username = ?');
$stmt->bind_param("s", $username);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    if (password_verify($password, $fila['password'])) {
        $_SESSION['is_logged'] = True;
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit();
    } else {
        header('Location: form_login.php?error=contraseña_incorrecta');
        exit();
    }
} else {
    header('Location: form_login.php?error=usuario_no_encontrado');
    exit();
}

$stmt->close();
$conn->close();
?>
