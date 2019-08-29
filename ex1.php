<?php
    $bimestre1 = $_POST["bimestre1"];
    $bimestre2 = $_POST["bimestre2"];
    $aluno = $_POST["nomeAluno"];
    echo $aluno . " suas notas foram: <br>" . "1º Bimestre: " . $bimestre1 . "<br>2º Bimestre: " . $bimestre2 . "<br>Média: " . ($bimestre1 + $bimestre2)/2;
?>