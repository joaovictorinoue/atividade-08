<?php

$idade = $_POST["idade"];

if ($idade < 18) {
    echo "Você é menor de idade";
} else {
    echo "Você é maior de idade";
}

?>