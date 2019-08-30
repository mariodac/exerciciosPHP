<?php
    function decompor($num)
    {
        $v100 = intdiv($num, 100);
        $num = $num - ($v100 * 100);
        $v50 = intdiv($num, 50);
        $num = $num - ($v50 * 50);
        $v20 = intdiv($num, 20);
        $num = $num - $v20 * 20;
        $v10 = intdiv($num, 10);
        $num = $num - ($v10 * 10);
        $v5 = intdiv($num, 5);
        $num = $num - ($v5 * 5);
        $v2 = intdiv($num, 2);
        $num = $num - ($v2 * 2);
        $v1 = $num;
        $vetor = array("100" => $v100, "50" => $v50, "20" => $v20, "10" => $v10, "5" => $v5, "2" => $v2, "1" => $v1);
        return $vetor;
    }

    $num = $_POST["num"];
    var_dump(decompor($num));
?>