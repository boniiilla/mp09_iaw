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

#a partir de aquí habrá que tratar el contenido y resolver...
$cuentaA;

$frase = 'Este es un ejemplo con varias letras A y a';
$cuentaA = 0;

// Convertimos la frase a un array de caracteres
$frasearray = str_split($frase);

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
