<?php
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $delta = pow($b, 2) - (4 * $a * $c);
    if($delta < 0)
        echo "Não há raízes reais. Com o delta = " . $delta;
    else{
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Raízes da equação: <br>" . "X1 = " . $x1 . "<br>X2 = ". $x2;
    }
?>