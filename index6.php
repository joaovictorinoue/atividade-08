<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio</title>
</head>
<body>
    <button >Sortear</button><br>
</body>
</html>

<?php

$numeros = array("1", "2", "3", "4", "5", "6");
$numSorteado = sizeof($numeros);
$sorteado[1] = $numeros[rand(0,$numSorteado - 1)];

echo "Número Sorteado: " . $sorteado[1] . "<br/>";

?>