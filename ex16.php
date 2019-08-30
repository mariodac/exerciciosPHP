<?php
    $intervalo = $_POST["intervalo"];
    $vetor = explode(" ", $intervalo);
    echo "Maior = " .  max($vetor);
?>