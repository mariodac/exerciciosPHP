<?php
    function pesoIdeal($sexo, $altura)
    {
        if($sexo == "M")
            return (72.7 * $altura) - 58;
        else if($sexo == "F")
            return (62.1 * $altura) - 44.7;
        else    
            return "Selecione o sexo";
    }

    $sexo = $_POST["sexo"];
    $altura = $_POST["altura"];
    echo "Peso ideal: " . pesoIdeal($sexo, $altura);
?>