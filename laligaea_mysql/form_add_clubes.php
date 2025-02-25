<?php 
    session_start();

    require('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/laliga.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/form_add_clubes.css">
    <title>Añadir Equipo</title>
</head>
<body>
    <header>
        <div class="img">
            <a href="index.php">
                <img src="img/laligaea.png" alt="LaLiga EA" width="70" height="50" class="laligaea" style="margin-top: 10px;">
            </a>
        </div>
        <div class="buttons">
            <input type="button" class="button" value="Añadir Equipo" onclick="location.href='form_add_clubes.php';"/>
        </div>
        <div class="button_login">
            <a href="logout.php">
                <img src="img/icono-salida.png" alt="Icono Logout" width="30" height="30" class="laligaea" style="margin-top: 10px;">
            </a>
        </div>
    </header>
    <div class="container">
        <div class="title">
            <h1>LALIGA EA</h1>
            <img src="img/ea-sports.png" alt="LaLiga" width="70" height="70" class="easports">
        </div>
        <div class="form_clubes">
            <form action="add_clubes.php" method="POST">
                <label for="nombre">NOMBRE:</label>
                <input type="text" name="nombre" id="nombre" required placeholder="Introduce el nombre...">
                <label for="ciudad">CIUDAD:</label>
                <input type="text" name="ciudad" id="ciudad" required placeholder="Introduce la ciudad...">
                <label for="estadio">ESTADIO:</label>
                <input type="text" name="estadio" id="estadio" required placeholder="Introduce el estadio..."> 
                <label for="fundacion">FUNDACION:</label>
                <input type="number" name="fundacion" id="fundacion" required placeholder="Introduce el año de fundación...">
                <label for="presidente">PRESIDENTE ACTUAL:</label>
                <input type="text" name="presidente" id="presidente" required placeholder="Introduce el presidente...">
                <label for="entrenador">ENTRENADOR ACTUAL:</label>
                <input type="text" name="entrenador" id="entrenador" required placeholder="Introduce el entrenador...">
                <label for="escudo">ESCUDO (URL):</label>
                <input type="text" name="escudo" id="escudo" required placeholder="Introduce la URL del escudo en .png...">
                <input type="submit" value="Añadir Club">
            </form>
            <div class="add_fast">
                <?php 
                $query = "SELECT * FROM clubes WHERE add_fast = 1";
                $result = $conn->query($query);
                $num = $result->num_rows;

                $num_fast = 20 - $num;
                
                if ($num_fast > 0) {
                    echo "<input type='button' class='add_fast' value='Añadir Rápido (" . $num_fast . ")' onclick='location.href=\"add_clubes_fast.php\";'/>";
                }   
                ?>
            </div>
        </div>
        
    </div>
</body>
</html>