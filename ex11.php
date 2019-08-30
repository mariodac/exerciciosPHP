<?php
    $num = $_POST["num"];
    for ($i=0; $i < $num; $i++) { 
        if($i == ($num - 1))
            echo $i;
        else
            echo $i . ", ";
    }
    echo " e " . $num;
?>