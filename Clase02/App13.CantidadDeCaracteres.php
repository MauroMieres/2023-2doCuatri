<?php 
/*MIERES MAURO 3C
Aplicación No 13 (Cantidad de caracteres)
Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La
función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
“Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán: 1 si la palabra
pertenece a algún elemento del listado.
0 en caso contrario.*/

function funcion($palabra,$max) {
    
    $palabrasValidas = [
        "Recuperatorio",
        "Parcial",
        "Programación"
    ];

   if(strlen($palabra)>$max)
   return 0;

    foreach($palabrasValidas as $p){
        if(strcasecmp($palabra,$p)===0){
            return 1;
        }         
    }
    return false;   
}

$palabra = "Recuperatorio";
$resultado = funcion($palabra,25);
echo($resultado);

?>