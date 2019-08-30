<?php
    function divisivel3e5($num)
    {
        if($num % 3 == 0 && $num % 5 == 0)
            return true;
        else 
            return false;
    }
    $num = $_POST["num"];
    echo "Divisível por 3 e 5? ";
    if(divisivel3e5($num))
        echo "SIM";
    else
        echo "NÃO";
?>