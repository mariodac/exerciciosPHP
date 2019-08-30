<?php
    function maior($num1, $num2)
    {
        if($num1 > $num2)
            return $num1;
        else return $num2;
    }

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    echo "MAIOR = " . maior($num1, $num2);
?>