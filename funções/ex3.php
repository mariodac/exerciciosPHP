<?php
    function divisivel3($num)
    {
        if($num % 3 == 0)
            return true;
        else 
            return false;
    }
    $num = $_POST["num"];
    echo "Divisível por 3? ";
    if(divisivel3($num))
        echo "SIM";
    else
        echo "NÃO";
?>