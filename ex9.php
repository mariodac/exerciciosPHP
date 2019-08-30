<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    if(($x < ($y + $z)) && ($y < ($x + $z)) && ($z < ($x + $y))){
        echo "Triangulo ";
        if($x == $y && $y == $z && $x == $z)
            echo "Equilátero";
        else if(($x == $y) || ($x == $z) || ($y == $z))
            echo "Isósceles";
        else
            echo "Escaleno";
    }
    else 
        echo "Não é triangulo";
?>