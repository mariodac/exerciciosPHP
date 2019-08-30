<?php
    $num = $_POST["num"];
    if($num > 0 && ($num % 2 == 0))
        echo "Positivo e par";
    else if($num > 0 && ($num % 2 != 0))
        echo "Postivo e ímpar";
    else if($num < 0 && ($num % 2 == 0))
        echo "Negativo e par";
    else if($num < 0 && ($num % 2 != 0))
        echo "Negativo e ímpar";
?>