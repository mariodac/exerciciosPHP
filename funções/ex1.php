<?php
    function fahrenheitParaCelsius($temperatura){
        $celsious = (5/9) * ($temperatura - 32);
        return $celsious;
    }
    $temperatura = $_POST["temperatura"];
    echo fahrenheitParaCelsius($temperatura) . "°C";

?>