<?php
/* MIERES MAURO 3C
Aplicación No 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.*/
// Definir el array y cargar números aleatorios
$numeros = array();
for ($i = 0; $i < 5; $i++) {
  $numeros[$i] = rand(1, 10);
}

// Calcular el promedio de los números
$suma = 0;
foreach ($numeros as $numero) {
  $suma += $numero;
}
$promedio = $suma / count($numeros);

// Comparar el promedio con 6
if ($promedio > 6) {
  echo "El promedio de los números es mayor que 6: ".$promedio;
} elseif ($promedio < 6) {
  echo "El promedio de los números es menor que 6: ".$promedio;
} else {
  echo "El promedio de los números es igual a 6: ".$promedio;
}
?>