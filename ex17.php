<?php
    $vetor = array();
    $impar = 0;
    for ($i=0; $impar < 10; $i++) { 
        if($i % 2 != 0){
            array_push($vetor, $i);
            $impar += 1;
        }
    }

    for ($i=0; $i < count($vetor); $i++) { 
        echo $vetor[$i] . " ";
    }
?>