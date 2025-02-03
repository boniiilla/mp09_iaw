<?php
session_start();

require('connection.php');

$nombre = $_POST['nombre'];
$ciudad = $_POST['ciudad'];
$estadio = $_POST['estadio'];
$fundacion = $_POST['fundacion'];
$presidente = $_POST['presidente'];
$entrenador = $_POST['entrenador'];
$escudo = $_POST['escudo'];

$stmt = $conn->prepare("INSERT INTO clubes (nombre, ciudad, estadio, fundacion, presidente, entrenador, escudo) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssisss", $nombre, $ciudad, $estadio, $fundacion, $presidente, $entrenador, $escudo);

$stmt->execute();

$stmt->close();
$conn->close();

header("Location: index.php");
exit();
?>