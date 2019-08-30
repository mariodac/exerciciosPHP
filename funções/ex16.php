<?php
    function verificaIntervalo($intervalo)
    {
        $vetor = explode(" ", $intervalo);
        $novoVetor = array();
        for ($i=0; $i <= 50; $i++) {
            if($key  = array_search($i, $vetor)){
                array_push($novoVetor, $vetor[$key]);
            }
        }
        // var_dump($novoVetor);
        return $novoVetor;
    }

    $intervalo = $_POST["intervalo"];
    $resultado = verificaIntervalo($intervalo);
    // var_dump(verificaIntervalo($intervalo));
    echo "Quantidade dentro do intervalo: " . count($resultado) . "<br>";
    for ($i=0; $i < count($resultado); $i++) { 
        echo $resultado[$i] . " ";
    }
?>