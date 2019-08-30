<?php
    function soma($num1, $num2)
    {
        $soma = $num1 = $num2;
        if($soma > 50)
            return $soma + ($soma * 0.2);
        else
            return $soma + ($soma * 0.1);
    }

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    echo soma($num1, $num2);
?>