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

        if (!isset($_SESSION['contarA'])) {
            $_SESSION['contarA'] = 0; 
        }

        $cuentaA = 0;

        foreach ($frasearray as $letra) {
            if (strtolower($letra) == 'a') {
                $cuentaA++;
            }
        }

        $_SESSION['contarA'] += $cuentaA;

        echo "A's trobades en aquesta frase: <strong>" . $cuentaA . "</strong><br>";
        echo "A's totals acumulades en la sessió: <strong>" . $_SESSION['contarA'] . "</strong><br>";
        ?>

        <form action="form_cuenta_a.php" method="get">
            <input type="submit" name="submit" value="Tornar"/>
        </form>
    </body>
</html>