<?php
/* MIERES MAURO 3C
Aplicación No 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números
utilizando las estructuras while y foreach.*/
// Crear un array vacío
$numeros_impares = array();

// Cargar los primeros 10 números impares
$num = 1;
while (count($numeros_impares) < 10) {
  if ($num % 2 != 0) {
    $numeros_impares[] = $num;
  }
  $num++;
}

// Imprimir los números utilizando la estructura for
#el strong me permite poner el texto en negrita
echo "<strong>Impresión utilizando for:</strong><br/>";
for ($i = 0; $i < count($numeros_impares); $i++) {
  echo $numeros_impares[$i]."<br/>";
}

// Imprimir los números utilizando la estructura while
echo "<strong>Impresión utilizando while:</strong><br/>";
$j = 0;
while ($j < count($numeros_impares)) {
  echo $numeros_impares[$j]."<br/>";
  $j++;
}

// Imprimir los números utilizando la estructura foreach
echo "<strong>Impresión utilizando foreach:</strong><br/>";
foreach ($numeros_impares as $numero) {
  echo $numero."<br/>";
}
?>