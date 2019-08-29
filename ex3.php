<?php
    $aresta = $_POST["aresta"];
    $faces = $_POST["faces"];
    $vertices = $aresta + 2 - $faces;
    echo "Numero de vertices: " . $vertices;
?>