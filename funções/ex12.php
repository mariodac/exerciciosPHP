<?php

    function fatorial($num)
    {
        $resultado = 1;
        for ($i=$num; $i > 0; $i--) { 
            $resultado *= $i;
        }
        return $resultado;
    }

    $num = $_POST["num"];
    echo "Fatorial = " . fatorial($num);