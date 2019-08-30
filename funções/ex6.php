<?php
    function crescente($num1, $num2, $num3)
    {
        $vetor = array();
        $vetor[0] = $num1;
        $vetor[1] = $num2;
        $vetor[3] = $num3;
        sort($vetor);
        for ($i=0; $i < count($vetor); $i++) { 
            echo $vetor[$i] . " ";
        }
    }

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    crescente($num1, $num2, $num3);
?>