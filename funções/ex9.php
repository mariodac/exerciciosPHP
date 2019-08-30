<?php
    function tabuada($num)
    {
        echo "<table border='1'>";
        for ($i=0; $i <= 10; $i++) { 
            echo "<tr>";
            echo "<td>" . $num . "</td>";
            echo "<td>x</td>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . "=" . "</td>";
            echo "<td>" . ($num * $i) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    $num = $_POST["num"];
    tabuada($num);
?>