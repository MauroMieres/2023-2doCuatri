<?php
/* MIERES MAURO 3C
Aplicación No 9 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.*/ 
// las claves pasan a ser los strings en vez de los numeros o indice
    $lapicera = array(
        "color" => "",
        "marca" => "",
        "trazo" => "",
        "precio" => ""
    );

    // Creamos y cargamos la primera lapicera
    $lapicera["color"] = "Azul";
    $lapicera["marca"] = "Bic";
    $lapicera["trazo"] = "Fino";
    $lapicera["precio"] = 1.5;

    // Mostramos la primera lapicera
    echo "Lapicera 1:<br>";
    foreach($lapicera as $clave => $valor) {
        echo "$clave: $valor<br>";
    }
    echo "<br>";

    // Creamos y cargamos la segunda lapicera
    $lapicera["color"] = "Negro";
    $lapicera["marca"] = "Pilot";
    $lapicera["trazo"] = "Medio";
    $lapicera["precio"] = 2.5;

    // Mostramos la segunda lapicera
    echo "Lapicera 2:<br>";
    foreach($lapicera as $clave => $valor) {
        echo "$clave: $valor<br>";
    }
    echo "<br>";

    // Creamos y cargamos la tercera lapicera
    $lapicera["color"] = "Rojo";
    $lapicera["marca"] = "Faber-Castell";
    $lapicera["trazo"] = "Grueso";
    $lapicera["precio"] = 3.5;

    // Mostramos la tercera lapicera
    echo "Lapicera 3:<br>";
    foreach($lapicera as $clave => $valor) {
        echo "$clave: $valor<br>";
    }
?>