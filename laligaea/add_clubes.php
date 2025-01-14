<?php
session_start();

$num += 1;

if (isset($_SESSION['array_clubes'])) {
    $array_clubes = $_SESSION['array_clubes'];
} else {
    $array_clubes = [];
}

$nombre = $_POST['nombre'];
$ciudad = $_POST['ciudad'];
$estadio = $_POST['estadio'];
$fundacion = $_POST['fundacion'];
$presidente = $_POST['presidente'];
$entrenador = $_POST['entrenador'];
$escudo = $_POST['escudo'];

$club = [
    'nombre' => $nombre,
    'ciudad' => $ciudad,
    'estadio' => $estadio,
    'fundacion' => $fundacion,
    'presidente' => $presidente,
    'entrenador' => $entrenador,
    'escudo' => $escudo
];

$array_clubes[] = $club;

$_SESSION['array_clubes'] = $array_clubes;

header("Location: index.php");
exit();
?>