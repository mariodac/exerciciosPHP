<?php
    $nome = $_POST["nome"];
    $altura = $_POST["altura"];
    $peso = $_POST["peso"];
    $pesoIdeal = (((72.7 * $altura)) - 58);
    echo $nome . ", seu peso ideal é: " . $pesoIdeal;
?>