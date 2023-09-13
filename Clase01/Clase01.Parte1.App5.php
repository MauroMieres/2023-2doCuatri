<?php
/* MIERES MAURO 3C
Aplicación No 5 (Números en letras)
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.*/
$num = 52;
$numeros = array(
  20 => "veinte", 30 => "treinta", 40 => "cuarenta", 
  50 => "cincuenta", 60 => "sesenta"
);

if ($num >= 20 && $num <= 60) {
    # floor devuelve el número entero más grande que es menor o igual a un número dado.
  $decenas = floor($num / 10) * 10;
  # con % (modulo) obtengo el resto de la division, ejemplo, 43/10 >>> 3, con eso consigo la unidad
  $unidades = $num % 10;
  $nombre = $numeros[$decenas];
  if ($unidades > 0) {
    $nombre .= " y " . unidad($unidades);
  }
  echo $nombre;
} else {
  echo "El número debe estar entre 20 y 60";
}

function unidad($num) {
  switch ($num) {
    case 1: return "uno";
    case 2: return "dos";
    case 3: return "tres";
    case 4: return "cuatro";
    case 5: return "cinco";
    case 6: return "seis";
    case 7: return "siete";
    case 8: return "ocho";
    case 9: return "nueve";
  }
}
?>