<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/laliga.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <title>LaLiga EA</title>
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
            margin: 10px 15px;
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
        }

        .container {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .clubs_list {
            margin-top: -30px;
            width: 80%;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .club_card {
            background-color: #1a1a1a;
            border: 1px solid #ff003f;
            border-radius: 15px;
            width: 300px;
            padding: 15px;
            text-align: center;
            transition: transform 0.3s ease;
            /* flex-grow: 2; */
            flex-basis: 200;
        }

        .club_card:hover {
            transform: scale(1.03);
        }

        .club_escudo {
            width: 125px;
            height: 125px;
            margin-bottom: 0px;
        }

        .club_card h3 {
            margin: 10px 0;
            font-size: 25px;
            color: #ff003f;
            letter-spacing: 2px;
        }

        .club_card p {
            margin: 5px 0;
            font-size: 16px;
            color: #FFFFFF;
            letter-spacing: 1px;
        }

        .club_buttons {
            display: flex;
            justify-content: center;
            flex-direction: row;
            width: 100%;
            margin-top: 10px;
        } 

        .club_buttons .button {
            width: 6vw;
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

    </style>
</head>
<body>
    <?php
    session_start();

    if (isset($_SESSION['array_clubes'])) {
        $array_clubes = $_SESSION['array_clubes'];
        // $_SESSION['array_clubes'] = [];
    } else {
        $array_clubes = [];
    }
    ?>
    <header>
        <div class="img">
            <img src="img/laligaea.png" alt="LaLiga EA" width="70" height="50" class="laligaea">
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
        <div class="clubs_list">
            <?php
            if (count($array_clubes) == 0) {
                echo "<h2 style='font-size: 3.5vw; margin-top: 150px; color: #bbbbbb; letter-spacing: 2px;'>SIN REGISTROS</h2>";
            } else {
                foreach ($array_clubes as $index => $club) {
                    echo "<div class='club_card'>";
                    echo "<img src='" . htmlspecialchars($club['escudo']) . "' alt='Escudo' class='club_escudo'/>";
                    echo "<h3>" . htmlspecialchars($club['nombre']) . "</h3>";
                    echo "<p><strong>Ciudad:</strong> " . htmlspecialchars($club['ciudad']) . "</p>";
                    echo "<p><strong>Estadio:</strong> " . htmlspecialchars($club['estadio']) . "</p>";
                    echo "<p><strong>Fundación:</strong> " . htmlspecialchars($club['fundacion']) . "</p>";
                    echo "<p><strong>Presidente:</strong> " . htmlspecialchars($club['presidente']) . "</p>";
                    echo "<p><strong>Entrenador:</strong> " . htmlspecialchars($club['entrenador']) . "</p>";
                    echo "<div class='club_buttons'>";
                    echo "<input type='button' class='button' value='Modificar' onclick='location.href=\"form_edit_clubes.php?id=" . ($index) . "\";'/>";
                    echo "<input type='button' class='button' value='Eliminar' onclick='location.href=\"delete_clubes.php?id=" . ($index) . "\";'/>";
                    echo "</div>";
                    echo "</div>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
