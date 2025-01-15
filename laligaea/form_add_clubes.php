<?php 
    session_start();
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
    <title>Añadir Equipo</title>
    <style>
        body {
            background-color: #111111;
            margin: 0;
            font-family: "Jockey One", sans-serif;
            color: #FFFFFF;
        }

        header {
            background: linear-gradient(to top, #111111, #000000) 0;
            padding: 15px 1%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            font-family: "Jockey One", sans-serif;
            height: 70px;
        }

        .button {
            width: 150px;
            background: none;
            font-family: "Jockey One", sans-serif;
            border: 3px solid #ff003f;
            font-size: 16px;
            font-weight: bold;
            border-radius: 30px;
            cursor: pointer;
            color: #FFFFFF;
            margin: 5px 25px;
            padding: 10px 0px;
            transform: scale(1);
            transition: transform 0.7s ease, background 0.7s ease;
            letter-spacing: 1.5px;
        }

        .buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: top;
            align-items: flex-start;
            margin-left: 16%;
        }

        .button:hover {
            transform: scale(1.15);
            background-color: #ff002E;
            color: #FFFFFF;
        }


        header img {
            margin-right: -30px;
            margin-left: 10px;
            justify-content: top;
            align-content: flex-start;
            cursor: pointer;
        }

        .container {
            margin: 0 25px;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            align-content: center;
        }
        
        .title {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-content: center;
            text-align: center;
            justify-content: center;
        }

        h1 {
            color: #FFFFFF;
            font-size: 7vw;
            padding: 0;
            margin-top: 0;
            letter-spacing: 0.2vw;
        }

        .easports {
            margin: 2vw 1vw;
            width: 5.8vw;
            height: 5.8vw;
        }

        .form_clubes {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            margin: 0 20px;
            padding: 0;
            width: 40vw;
            font-family: "Jockey One", sans-serif;
            margin-top: -50px;
        }

        .form_clubes label {
            color: #ff003f;
            font-size: 1.3vw;
            font-weight: bold;
            padding: 20px 0;
            letter-spacing: 1.4px;
            font-family: "Jockey One", sans-serif;
            font-size: 1.5vw;
        }

        .form_clubes input[type="submit"] {
            background-color: #ff003f;
            transform: scale(1);
            transition: transform 0.7s ease, background 0.7s ease;
        }

        .form_clubes input[type="submit"]:hover {
            background-color:rgb(175, 0, 44);
            transform: scale(1.05);
        }

        .form_clubes input {
            padding: 10px;
            border-radius: 30px;
            border: 2px solid #ff003f;
            color: #000000;
            background-color: #FFFFFF;
            width: 100%;
            font-family: "Jockey One", sans-serif;
            font-size: 1vw;
            margin-bottom: 20px;
            margin-top: 5px;
        }

        .form_clubes input[type="text"], .form_clubes input[type="number"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
        
        .add_fast {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            align-content: center;
            color: #FFFFFF;
        }

        .add_fast input[type="button"] {
            justify-content: center;
            width: 30%;
            color: #FFFFFF;
            background-color: #111111;
            transform: scale(1);
            transition: transform 0.7s ease, background 0.7s ease;
        }

        .add_fast input[type="button"]:hover {
            background-color:rgb(49, 49, 49);
            transform: scale(1.05);
        }
    </style>
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
                if (isset($_SESSION['array_clubes'])) {
                    $array_clubs = $_SESSION['array_clubes'];
                } else {
                    $array_clubs = [];
                }
                $num_fast = 10 - $_SESSION['id'];
                
                if ($num_fast > 0) {
                    echo "<input type='button' class='add_fast' value='Añadir Rápido (" . $num_fast . ")' onclick='location.href=\"add_clubes_fast.php\";'/>";
                }   
                ?>
            </div>
        </div>
        
    </div>
</body>
</html>