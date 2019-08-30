<?php
    $inferior = $_POST["inferior"];
    $superior = $_POST["superior"];
    $soma = 0;
    for ($i=$inferior+1; $i < $superior ; $i++) { 
        if($i % 2 == 0){
            echo $i . " ";
            $soma += $i;
        }
    }
    echo "<br>Soma = " . $soma;
?>