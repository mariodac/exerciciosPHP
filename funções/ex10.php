<?php
    function numeroExtenso($num)
    {
        if($num == 0)
            return "ZERO";
        else if($num == 1)
            return "UM";
        else if($num == 2)
            return "DOIS";
        else if($num == 3)
            return "TRÊS";
        else if($num == 4)
            return "QUATRO";
        else if($num == 5)
            return "CINCO";
        else if($num == 6)
            return "SEIS";
        else if($num == 7)
            return "SETE";
        else if($num == 8)
            return "OITO";
        else if($num == 9)
            return "NOVE";
    }    

    $num = $_POST['num1'];
    echo numeroExtenso($num);


