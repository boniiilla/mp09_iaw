<?php
session_start();

require('connection.php');

if (isset($_GET['id'])) {
    // Eliminar el club por su índice
    $query = "DELETE FROM clubes WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $_GET['id']);
    $stmt->execute();

    $stmt->close();
    $conn->close();
} else {
    header('Location: index.php');
    exit();
}

header('Location: index.php');
exit;
?>