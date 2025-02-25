<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fav_club'])) {
    $equipo_favorito = $_POST['fav_club'];
    setcookie("favorito", $equipo_favorito, time() + 5, "/");
    $_COOKIE["favorito"] = $equipo_favorito;
}

$fav_club_id = isset($_COOKIE["favorito"]) ? $_COOKIE["favorito"] : '';
?>