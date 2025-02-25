<?php
session_start();
require('connection.php');
require('cookies.php');
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
    <link rel="stylesheet" href="css/index.css">
    <title>LaLiga EA</title>
</head>
<body>
    <?php

    ?>
    <header>
        <div class="img">
            <img src="img/laligaea.png" alt="LaLiga EA" width="70" height="50" class="laligaea" style="margin-top: 10px;">
        </div>
        <?php if (isset($_SESSION['is_logged']) && $_SESSION['is_logged']): ?>
            <div class="buttons">
                <input type="button" class="button" value="Añadir Equipo" onclick="location.href='form_add_clubes.php';"/> 
            </div>
            <div class="button_login">
                <a href="logout.php">
                    <img src="img/icono-salida.png" alt="Icono Logout" width="30" height="30" class="laligaea" style="margin-top: 10px;">
                </a>
            </div>
        <?php else: ?>
            <div class="button_login">
            <a href="form_login.php">
                <img src="img/icono100.png" alt="Icono Login" width="45" height="45" class="laligaea" style="margin-top: 10px;">
            </a>
            </div>
        <?php endif; ?>
    </header>
    <div class="container">
        <div class="title">
            <h1>LALIGA EA</h1>
            <img src="img/ea-sports.png" alt="LaLiga" width="70" height="70" class="easports">
        </div>
        <?php if (isset($_SESSION['is_logged']) && $_SESSION['is_logged']): ?>
        <div class="favorite_club">
            <?php
            $fav_club_id = isset($_POST['fav_club']) ? $_POST['fav_club'] : '';
            ?>

            <form method="POST" action="">
                <select name="fav_club" id="fav_club" onchange="this.form.submit()">
                    <option value="">Equipo Favorito</option>
                    <?php
                    $clubes = $conn->query("SELECT id, nombre FROM clubes");
                    while ($club = $clubes->fetch_assoc()) {
                        $selected = ($club['id'] == $fav_club_id) ? 'selected' : '';
                        echo "<option value='" . $club['id'] . "' $selected>" . htmlspecialchars($club['nombre']) . "</option>";
                    }
                    ?>
                </select>
            </form>

            <?php
            if ($fav_club_id) {
                $fav_club_query = $conn->query("SELECT escudo FROM clubes WHERE id = " . $fav_club_id);
                if ($fav_club_query->num_rows > 0) {
                    $fav_club = $fav_club_query->fetch_assoc();
                    echo "<div class='favorite_club_image'>";
                    echo "<img src='" . htmlspecialchars($fav_club['escudo']) . "' alt='Escudo' class='club_escudo'/>";
                    echo "</div>";
                }
            }
            ?>
        </div>
        <?php endif; ?>
        <div class="filter">
            <form method="GET" action="">
                <input type="text" name="search" placeholder="Buscar club..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                <button type="submit" class="button">
                    <img src="img/lupa.png" alt="Buscar" width="30" height="30">
                </button>
            </form>
            <?php
            $search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';
            ?>
        </div>
        <div class="clubs_list">
            <?php
                $query = "SELECT * FROM clubes";
                if ($search) {
                    $query = "SELECT * FROM clubes WHERE nombre LIKE '%" . $search . "%'";
                }

                $registros = $conn->query($query);

                if ($registros->num_rows > 0) {
                    while ($fila = $registros->fetch_assoc()) {
                        echo "<div class='club_card'>";
                        echo "<img src='" . htmlspecialchars($fila['escudo']) . "' alt='Escudo' class='club_escudo'/>";
                        echo "<h3>" . htmlspecialchars($fila['nombre']) . "</h3>";
                        echo "<p><strong>Ciudad:</strong> " . htmlspecialchars($fila['ciudad']) . "</p>";
                        echo "<p><strong>Estadio:</strong> " . htmlspecialchars($fila['estadio']) . "</p>";
                        echo "<p><strong>Fundación:</strong> " . htmlspecialchars($fila['fundacion']) . "</p>";
                        echo "<p><strong>Presidente:</strong> " . htmlspecialchars($fila['presidente']) . "</p>";
                        echo "<p><strong>Entrenador:</strong> " . htmlspecialchars($fila['entrenador']) . "</p>";
                        echo "<div class='club_buttons'>";
                        echo "<input type='button' class='button' value='Modificar' onclick='location.href=\"form_edit_clubes.php?id=" . ($fila['id']) . "\";'/>";
                        echo "<input type='button' class='button' value='Eliminar' onclick='location.href=\"delete_clubes.php?id=" . ($fila['id']) . "\";'/>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "<h2 style='font-size: 2vw; margin-top: 150px; margin-left: 0px; color: #bbbbbb; letter-spacing: 2px;'>SIN REGISTROS</h2>";
                }
            ?>
        </div>
    </div>
</body>
</html>
