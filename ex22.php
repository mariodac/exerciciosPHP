<?php
    $intervalo = $_POST["intervalo"];
    $vetor = explode(" ", $intervalo);
    rsort($vetor);
    for ($i=0; $i < count($vetor); $i++) { 
        echo $vetor[$i] . " ";
    }
?>