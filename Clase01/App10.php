<?php
/* MIERES MAURO 3C
Aplicación No 10 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.*/
// Array asociativo de lapiceras
$lapicera1 = array(
    'color' => 'azul',
    'marca' => 'Bic',
    'trazo' => 'fino',
    'precio' => 1.5
);

$lapicera2 = array(
    'color' => 'negro',
    'marca' => 'Faber-Castell',
    'trazo' => 'medio',
    'precio' => 2.0
);

$lapicera3 = array(
    'color' => 'rojo',
    'marca' => 'Paper Mate',
    'trazo' => 'grueso',
    'precio' => 1.8
);

// Array de Arrays asociativo
$lapiceras_asociativo = array(
    'lapicera1' => $lapicera1,
    'lapicera2' => $lapicera2,
    'lapicera3' => $lapicera3
);

// Array de Arrays indexado (cada elemento es una lapicera (otro array))
$lapiceras_indexado = array($lapicera1, $lapicera2, $lapicera3);

// Mostrar los Arrays de Arrays
echo "Array de Arrays asociativo: <br>";
foreach ($lapiceras_asociativo as $key => $value) {
    echo "$key: <br>";
    foreach ($value as $key2 => $value2) {
        echo "$key2 => $value2 <br>";
    }
    echo "<br>";
}

echo "<br>Array de Arrays indexado: <br>";
foreach ($lapiceras_indexado as $key => $value) {
    echo "Lapicera $key: <br>";
    foreach ($value as $key2 => $value2) {
        echo "$key2 => $value2 <br>";
    }
    echo "<br>";
}
?>