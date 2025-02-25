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
    <link rel="stylesheet" href="css/form_edit_clubes.css">
    <title>Editar Equipo</title>
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
            <?php 
            require('connection.php');

            if (isset($_GET['id'])) {

                $query = "SELECT * FROM clubes WHERE id = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("i", $_GET['id']);
                $stmt->execute();

                $resultado = $stmt->get_result();
                $club = $resultado->fetch_assoc();

                $stmt->close();
                $conn->close();
            } else {
                header('Location: index.php');
                exit();
            }
            ?>
            <form action="update_clubes.php" method="POST">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET['id']); ?>">
                <label for="nombre">NOMBRE:</label>
                <input type="text" name="nombre" id="nombre" required value="<?php echo htmlspecialchars($club['nombre']); ?>">
                <label for="ciudad">CIUDAD:</label>
                <input type="text" name="ciudad" id="ciudad" required value="<?php echo htmlspecialchars($club['ciudad']); ?>">
                <label for="estadio">ESTADIO:</label>
                <input type="text" name="estadio" id="estadio" required value="<?php echo htmlspecialchars($club['estadio']); ?>"> 
                <label for="fundacion">FUNDACION:</label>
                <input type="number" name="fundacion" id="fundacion" required value="<?php echo htmlspecialchars($club['fundacion']); ?>">
                <label for="presidente">PRESIDENTE ACTUAL:</label>
                <input type="text" name="presidente" id="presidente" required value="<?php echo htmlspecialchars($club['presidente']); ?>">
                <label for="entrenador">ENTRENADOR ACTUAL:</label>
                <input type="text" name="entrenador" id="entrenador" required value="<?php echo htmlspecialchars($club['entrenador']); ?>">
                <label for="escudo">ESCUDO (URL):</label>
                <input type="text" name="escudo" id="escudo" required value="<?php echo htmlspecialchars($club['escudo']); ?>">
                <input type="submit" value="Modificar Club">
            </form>
        </div>
    </div>
</body>
</html>