<?php
$suma = 0;
$numerosSumados = 0;
$numeroActual = 1;

while ($suma + $numeroActual <= 1000) {
    $suma += $numeroActual;
    $numerosSumados++;
    $numeroActual++;
}

echo "Números sumados: ";
for ($i = 1; $i < $numerosSumados; $i++) {
    echo $i . ", ";
}
echo $numerosSumados . "<br>";

echo "Total de números sumados: " . $numerosSumados;
?>
