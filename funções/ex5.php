<?php
    function reverte($num)
    {
        return strrev($num);
    }

    $num = $_POST["num"];
    echo reverte($num);
?>