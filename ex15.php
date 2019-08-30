<?php
    $inferior = $_POST["inferior"];
    $superior = $_POST["superior"];
    for ($i=$inferior; $i <= $superior ; $i+=2) { 
        $c = ((5 / 9) *($i - 32));
        echo "Fahrenheit: " . $i .  "\tCentígrados: " . $c . "<br>";
    }
?>