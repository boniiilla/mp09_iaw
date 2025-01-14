<?php
session_start();


if (isset($_SESSION['array_clubes'])) {
    $array_clubes = $_SESSION['array_clubes'];
    if (count($array_clubes) > 0) {
        // $_SESSION['id'] = 0;
        if (isset($_SESSION['id'])) {
            $_SESSION['id'] += 1;
        } else {
            $_SESSION['id'] = 1;
        }
    } else {
        $_SESSION['id'] = 1;
    }
} else {
    $array_clubes = [];
    $_SESSION['id'] = 1;
}

if ($_SESSION['id'] == 1) {
    $nombre = 'Fc Barcelona';
    $ciudad = 'Barcelona';
    $estadio = 'Camp Nou';
    $fundacion = '1899';
    $presidente = 'Joan Laporta';
    $entrenador = 'Hansi Flick';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/barcelona.png';
} else if ($_SESSION['id'] == 2) {
    $nombre = 'Real Madrid';
    $ciudad = 'Madrid';
    $estadio = 'Santiago Bernabeu';
    $fundacion = '1902';
    $presidente = 'Florentino Perez';
    $entrenador = 'Carlo Ancelotti';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/real-madrid.png';
} else if ($_SESSION['id'] == 3) {
    $nombre = 'Atletico de Madrid';
    $ciudad = 'Madrid';
    $estadio = 'Civitas Metropolitano';
    $fundacion = '1903';
    $presidente = 'Enrique Cerezo';
    $entrenador = 'Diego Simeone';
    $escudo = 'https://assets.laliga.com/assets/2024/06/17/small/cbc5c8cc8c3e8abd0e175c00ee53b723.png';
} else if ($_SESSION['id'] == 4){
    $nombre = 'Sevilla FC';
    $ciudad = 'Sevilla';
    $estadio = 'Ramón Sánchez-Pizjuán';
    $fundacion = '1890';
    $presidente = 'José María de Nido Carrasco';
    $entrenador = 'Javier García Pimienta';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/sevilla.png';
} else if ($_SESSION['id'] == 5) {
    $nombre = 'Valencia CF';
    $ciudad = 'Valencia';
    $estadio = 'Mestalla';
    $fundacion = '1919';
    $presidente = 'Juan Cruz Sol';
    $entrenador = 'Carlos Corberán';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/valencia.png';
} else if ($_SESSION['id'] == 6) {
    $nombre = 'Real Betis';
    $ciudad = 'Sevilla';
    $estadio = 'Benito Villamarín';
    $fundacion = '1907';
    $presidente = 'Pedro Fernández';
    $entrenador = 'Manuel Pellegrini';
    $escudo = 'https://assets.laliga.com/assets/2022/09/15/small/e4a09419d3bd115b8f3dab73d480e146.png';
} else if ($_SESSION['id'] == 7) {
    $nombre = 'Real Sociedad';
    $ciudad = 'San Sebastián';
    $estadio = 'Anoeta';
    $fundacion = '1909';
    $presidente = 'Jokin Aperribay';
    $entrenador = 'Imanol Alguacil';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/real-sociedad.png';
} else if ($_SESSION['id'] == 8) {
    $nombre = 'Villarreal CF';
    $ciudad = 'Villarreal';
    $estadio = 'Estadio de la Cerámica';
    $fundacion = '1923';
    $presidente = 'Fernando Roig';
    $entrenador = 'Marcelino García Toral';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/villarreal.png';
} else if ($_SESSION['id'] == 9) {
    $nombre = 'Athletic Club';
    $ciudad = 'Bilbao';
    $estadio = 'San Mamés';
    $fundacion = '1898';
    $presidente = 'Jon Uriarte';
    $entrenador = 'Ernesto Valverde';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/athletic.png';
} else if ($_SESSION['id'] == 10) {
    $nombre = 'Celta de Vigo';
    $ciudad = 'Vigo';
    $estadio = 'Abanca-Balaídos';
    $fundacion = '1923';
    $presidente = 'Marián Mouriño';
    $entrenador = 'Claudio Giráldez';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/celta.png';
}


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