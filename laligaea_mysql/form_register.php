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
    <link rel="stylesheet" href="css/form_register.css">
    <title>Registrarse</title>
</head>
<body>
    <header>
        <div class="img">
            <a href="index.php">
                <img src="img/laligaea.png" alt="LaLiga EA" width="70" height="50" class="laligaea" style="margin-top: 10px;">
            </a>
        </div>
    </header>
    <div class="container">
        <div class="title">
            <h1>REGISTRARSE</h1>
            <img src="img/ea-sports.png" alt="LaLiga" width="40" height="40" class="easports">
        </div>
        <div class="form_login">
            <form action="register.php" method="post">
                <label for="username">USUARIO</label>
                <input type="text" id="username" name="username" required placeholder="Introduce tu usuario...">
                <label for="password">CONTRASEÑA</label>
                <input type="password" id="password" name="password" required placeholder="Introduce tu contraseña...">
                <input type="submit" value="RESGISTRATE">
            </form>
            <a href="form_login.php" class="register_link">Ya tienes cuenta? ¡Inicia Sessión!</a>
        </div>
    </div>
</body>
</html>
