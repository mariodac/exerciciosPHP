<?php
    $nivel = $_POST["nivel"];
    $horaAula = $_POST["horaAula"];
    if($nivel == 1)
        echo $horaAula * 12;
    else if($nivel == 2)
        echo $horaAula * 17;
    else if($nivel == 3)
        echo $horaAula * 25;
    else
        echo "Selecione o nível do professor!";

?>