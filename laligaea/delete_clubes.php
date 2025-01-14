<?php
session_start();

if (isset($_GET['id']) && isset($_SESSION['array_clubes'][$_GET['id']])) {
    // Eliminar el club por su índice
    unset($_SESSION['array_clubes'][$_GET['id']]);
    // Reindexar el array de clubes después de eliminar uno
    $_SESSION['array_clubes'] = array_values($_SESSION['array_clubes']);
}

header('Location: index.php');
exit;
?>