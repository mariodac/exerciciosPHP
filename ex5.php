<?php
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $media = ($nota1 + $nota2 + $nota3) / 3;
    if($media < 5)
        echo "Reprovado";
    else if($media >= 5 && $media < 7)
        echo "Recuperação";
    else if($media >= 7)
        echo "Aprovado";
?>