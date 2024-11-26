<html>
    <head>
        <title>CONTAR A SESSION</title>
    </head>
    <body>
        <?php
        session_start();
        var_dump($_GET);

        $frasearray = str_split($_GET['frase']);

        echo "<br/>";
        var_dump($frasearray);


        foreach ($frasearray as $letra) {
            if (ctype_alpha(strtolower($letra)) == True) {
                if (!isset($cuentaLetras[$letra])) {
                    $cuentaLetras[$letra] = 0;
                }
                $cuentaLetras[$letra]++;
            }
        }

        $_SESSION['cuentaLetas'] = [];

        foreach ($cuentaLetras as $letra => $count) {
            if (!isset($_SESSION['cuentaLetras'][$letra])) {
                $_SESSION['cuentaLetras'][$letra] = 0;
            }
            $_SESSION['cuentaLetras'][$letra] += $count;
        }

        echo "<br>Letras en la sessión:<br>";

        foreach ($_SESSION['cuentaLetras'] as $letra => $count) {
            echo "<br>" . strtoupper($letra) . " --> ". $count;
        }

        ?>
        <br>
        <form action="form_cuenta_letras.php" method="get">
            <input type="submit" name="submit" value="Tornar"/>
        </form>
    </body>
</html>