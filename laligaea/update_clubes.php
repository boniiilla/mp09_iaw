<?php
session_start();

if (isset($_POST['id']) && isset($_SESSION['array_clubes'][$_POST['id']])) {
    $id = $_POST['id'];
    $_SESSION['array_clubes'][$id] = [
        'nombre' => $_POST['nombre'],
        'ciudad' => $_POST['ciudad'],
        'estadio' => $_POST['estadio'],
        'fundacion' => $_POST['fundacion'],
        'presidente' => $_POST['presidente'],
        'entrenador' => $_POST['entrenador'],
        'escudo' => $_POST['escudo']
    ];
}

header('Location: index.php');
exit();
?>