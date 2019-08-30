<?php
    function potencia($base, $expoente){
        $resultado = 1;
        for($i = 1; $i <= $expoente; $i++){
            $resultado *= $base;
        }
        return $resultado;
    }

    $base = $_POST["base"];
    $expoente = $_POST["expoente"];
    echo "Resultado = " . potencia($base, $expoente);
?>