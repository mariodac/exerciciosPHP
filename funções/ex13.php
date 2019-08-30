<?php

    function calculaSerie($num)
    {
        $resultado = 0;
        for ($i=1; $i <= $num; $i++) { 
            $resultado += 1 / $i;
        }
        return $resultado;
    }

    $num = $_POST["num"];
    echo "Calculo = " . calculaSerie($num);