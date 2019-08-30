<?php
    $intervalo = $_POST["intervalo"];
    $vetor = explode(" ", $intervalo);
    $pares = 0;
    for ($i=0; $i < count($vetor); $i++) { 
        if($vetor[$i] % 2 == 0){
            $pares++;
        }
    }
    echo "Total de numeros pares = " . $pares; 
?>