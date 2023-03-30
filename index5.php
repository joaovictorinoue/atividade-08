<?php

$num = $_POST["num"];
$i = 0;

while($i <= 10){
    echo "$i * $num = " . $i * $num . "<br>";
    $i++;
}

?>