<?php
    function tabelaFeC($inferior, $superior)
    {
        echo "<table border='1'>";
        echo "<tr><td>°F</td><td>°C</td></tr>";
        for ($i=$inferior; $i <= $superior; $i++) { 
            $celsious = (5/9) * ($i - 32);
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . round($celsious, 2) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    $inferior = $_POST["inferior"];
    $superior = $_POST["superior"];
    tabelaFeC($inferior, $superior);
?>