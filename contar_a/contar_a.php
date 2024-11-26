<html>
<head>
<title>ORDENAR PHP</title>
</head>
<body>
<?php
#mostramos el contenido del array 
var_dump($_GET);
#convertimos el string enviado en un array
$frasearray = str_split($_GET['frase']);
echo "<br/>";
#lo mostramos:
var_dump($frasearray);

$cuentaA = 0;


// Recorremos el array para contar las 'a' y 'A'
foreach ($frasearray as $letra) {
    if (strtolower($letra) == 'a') { // No distingue entre mayúsculas y minúsculas
        $cuentaA++;
    }
}

echo "La letra 'a' (mayúscula o minúscula) aparece " . $cuentaA . " veces en la frase.";

?>
</body>
</html>
