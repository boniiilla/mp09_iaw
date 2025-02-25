<?php
session_start();

require('connection.php');

$query = "SELECT * FROM clubes WHERE add_fast = 1";
$result = $conn->query($query);
$num = $result->num_rows;

$add_id = $num + 1;

$add_fast = 1;

if ($add_id == 1) {
    $nombre = 'Fc Barcelona';
    $ciudad = 'Barcelona';
    $estadio = 'Camp Nou';
    $fundacion = '1899';
    $presidente = 'Joan Laporta';
    $entrenador = 'Hansi Flick';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/barcelona.png';
} else if ($add_id == 2) {
    $nombre = 'Real Madrid';
    $ciudad = 'Madrid';
    $estadio = 'Santiago Bernabeu';
    $fundacion = '1902';
    $presidente = 'Florentino Perez';
    $entrenador = 'Carlo Ancelotti';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/real-madrid.png';
} else if ($add_id == 3) {
    $nombre = 'Atletico de Madrid';
    $ciudad = 'Madrid';
    $estadio = 'Civitas Metropolitano';
    $fundacion = '1903';
    $presidente = 'Enrique Cerezo';
    $entrenador = 'Diego Simeone';
    $escudo = 'https://assets.laliga.com/assets/2024/06/17/small/cbc5c8cc8c3e8abd0e175c00ee53b723.png';
} else if ($add_id == 4){
    $nombre = 'Sevilla FC';
    $ciudad = 'Sevilla';
    $estadio = 'Ramón Sánchez-Pizjuán';
    $fundacion = '1890';
    $presidente = 'José María de Nido Carrasco';
    $entrenador = 'Javier García Pimienta';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/sevilla.png';
} else if ($add_id == 5) {
    $nombre = 'Valencia CF';
    $ciudad = 'Valencia';
    $estadio = 'Mestalla';
    $fundacion = '1919';
    $presidente = 'Juan Cruz Sol';
    $entrenador = 'Carlos Corberán';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/valencia.png';
} else if ($add_id == 6) {
    $nombre = 'Real Betis';
    $ciudad = 'Sevilla';
    $estadio = 'Benito Villamarín';
    $fundacion = '1907';
    $presidente = 'Pedro Fernández';
    $entrenador = 'Manuel Pellegrini';
    $escudo = 'https://assets.laliga.com/assets/2022/09/15/small/e4a09419d3bd115b8f3dab73d480e146.png';
} else if ($add_id == 7) {
    $nombre = 'Real Sociedad';
    $ciudad = 'San Sebastián';
    $estadio = 'Anoeta';
    $fundacion = '1909';
    $presidente = 'Jokin Aperribay';
    $entrenador = 'Imanol Alguacil';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/real-sociedad.png';
} else if ($add_id == 8) {
    $nombre = 'Villarreal CF';
    $ciudad = 'Villarreal';
    $estadio = 'Estadio de la Cerámica';
    $fundacion = '1923';
    $presidente = 'Fernando Roig';
    $entrenador = 'Marcelino García Toral';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/villarreal.png';
} else if ($add_id == 9) {
    $nombre = 'Athletic Club';
    $ciudad = 'Bilbao';
    $estadio = 'San Mamés';
    $fundacion = '1898';
    $presidente = 'Jon Uriarte';
    $entrenador = 'Ernesto Valverde';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/athletic.png';
} else if ($add_id == 10) {
    $nombre = 'Celta de Vigo';
    $ciudad = 'Vigo';
    $estadio = 'Abanca-Balaídos';
    $fundacion = '1923';
    $presidente = 'Marián Mouriño';
    $entrenador = 'Claudio Giráldez';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/celta.png';
} else if ($add_id == 11) {
    $nombre = 'CD Leganés';
    $ciudad = 'Leganés';
    $estadio = 'Estadio Municipal de Butarque';
    $fundacion = '1928';
    $presidente = 'Jeff Luhnow';
    $entrenador = 'Borja Jiménez';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/leganes.png';
} else if ($add_id == 12) {
    $nombre = 'Rayo Vallecano';
    $ciudad = 'Madrid';
    $estadio = 'Estadio de Vallecas';
    $fundacion = '1924';
    $presidente = 'Raúl Martín Presa';
    $entrenador = 'Iñigo Pérez';
    $escudo = 'https://assets.laliga.com/assets/2023/04/27/small/57d9950a8745ead226c04d37235c0786.png';
} else if ($add_id == 13) {
    $nombre = 'Getafe CF';
    $ciudad = 'Getafe';
    $estadio = 'Coliseum Alfonso Pérez';
    $fundacion = '1983';
    $presidente = 'Ángel Torres Sánchez';
    $entrenador = 'José Bordalás';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/getafe.png';
} else if ($add_id == 14) {
    $nombre = 'Real Valladolid';
    $ciudad = 'Valladolid';
    $estadio = 'José Zorrilla';
    $fundacion = '1928';
    $presidente = 'Ronaldo Nazário';
    $entrenador = 'Diego Cocca';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/valladolid.png';
} else if ($add_id == 15) {
    $nombre = 'CA Osasuna';
    $ciudad = 'Pamplona';
    $estadio = 'El Sadar';
    $fundacion = '1920';
    $presidente = 'Luis Sabalza';
    $entrenador = 'Vicente Moreno';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/osasuna.png';
} else if ($add_id == 16) {
    $nombre = 'RCD Espanyol';
    $ciudad = 'Barcelona';
    $estadio = 'RCDE Stadium';
    $fundacion = '1900';
    $presidente = 'Chen Yansheng';
    $entrenador = 'Manolo González';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/espanyol.png';
} else if ($add_id == 17) {
    $nombre = 'RCD Mallorca';
    $ciudad = 'Palma de Mallorca';
    $estadio = 'Visit Mallorca Estadi';
    $fundacion = '1916';
    $presidente = 'Andy Kohlberg';
    $entrenador = 'Jagoba Arrasate';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/mallorca.png';
} else if ($add_id == 18) {
    $nombre = 'UD Las Palmas';
    $ciudad = 'Las Palmas';
    $estadio = 'Estadio de Gran Canaria';
    $fundacion = '1949';
    $presidente = 'Miguel Ángel Ramírez';
    $entrenador = 'Diego Martínez';
    $escudo = 'https://assets.laliga.com/assets/2019/06/07/small/las-palmas.png';
} else if ($add_id == 19) {
    $nombre = 'Girona FC';
    $ciudad = 'Girona';
    $estadio = 'Estadi Montilivi';
    $fundacion = '1930';
    $presidente = 'Delfí Geli';
    $entrenador = 'Míchel';
    $escudo = 'https://assets.laliga.com/assets/2022/06/22/small/8f43addbb29e4a72f5e90b6edfe4728f.png';
} else if ($add_id == 20) {
    $nombre = 'Deportivo Alavés';
    $ciudad = 'Vitoria-Gasteiz';
    $estadio = 'Mendizorroza';
    $fundacion = '1921';
    $presidente = 'Alfonso Fernández';
    $entrenador = 'Eduardo Coudet';
    $escudo = 'https://assets.laliga.com/assets/2020/09/01/small/27002754a98bf535807fe49a24cc63ea.png';
}


$stmt = $conn->prepare("INSERT INTO clubes (nombre, ciudad, estadio, fundacion, presidente, entrenador, escudo, add_fast) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssisssi", $nombre, $ciudad, $estadio, $fundacion, $presidente, $entrenador, $escudo, $add_fast);

$stmt->execute();

$stmt->close();
$conn->close();

header("Location: index.php");
exit();
?>