<?php
    $cargo = $_POST["cargo"];
    $salario = $_POST["salario"];
    if($cargo == 101){
        $novoSalario = $salario + ($salario * 0.1);
        echo "Novo salário" . $novoSalario;
        echo "<br> Antigo salário" . $salario;
        echo "<br> Diferença " . ($novoSalario - $salario);
    }
    else if($cargo == 102){
        $novoSalario = $salario + ($salario * 0.2);
        echo "Novo salário" . $novoSalario;
        echo "<br> Antigo salário" . $salario;
        echo "<br> Diferença " . ($novoSalario - $salario);
    }
    else if($cargo == 103){
        $novoSalario = $salario + ($salario * 0.3);
        echo "Novo salário" . $novoSalario;
        echo "<br> Antigo salário" . $salario;
        echo "<br> Diferença " . ($novoSalario - $salario);
    }
    else{
        $novoSalario = $salario + ($salario * 0.4);
        echo "Novo salário" . $novoSalario;
        echo "<br> Antigo salário" . $salario;
        echo "<br> Diferença " . ($novoSalario - $salario);
    }
?>