<?php 
/* MIERES MAURO 3C
Aplicación No 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.
*/

function invertirPalabra($arrayDeCaracteres) {
    $longitud = count($arrayDeCaracteres);
    $invertedArray = array();

    // Invierte el array manualmente
    for ($i = $longitud - 1; $i >= 0; $i--) {
        $invertedArray[] = $arrayDeCaracteres[$i];
    }

    return $invertedArray;
}

// Ejemplo de uso:
$caracteres = array('I','N','V','E','R','T','I','R');
$caracteresInvertido = invertirPalabra($caracteres);

foreach ($caracteresInvertido as $caracter) {
    echo $caracter;
}
?>