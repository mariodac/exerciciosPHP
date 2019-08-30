<?php
    $intervalo = $_POST["intervalo"];
    $vetor = explode(" ", $intervalo);
    $inverso = array_reverse($vetor);
    for ($i=0; $i < count($vetor); $i++) {
        echo $inverso[$i] . " ";
    }
?>