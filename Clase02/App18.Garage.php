<?php 
/*MIERES MAURO 3C
Aplicación No 18 (Auto - Garage)
Crear la clase Garage que posea como atributos privados:

_razonSocial (String)
_precioPorHora (Double)
_autos (Autos[], reutilizar la clase Auto del ejercicio anterior)
Realizar un constructor capaz de poder instanciar objetos pasándole como

parámetros: i. La razón social.
ii. La razón social, y el precio por hora.

Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y
que mostrará todos los atributos del objeto.
Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un
objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.
Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage”
(sólo si el auto no está en el garaje, de lo contrario informarlo).
Ejemplo: $miGarage->Add($autoUno);
Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del
“Garage” (sólo si el auto está en el garaje, de lo contrario informarlo). Ejemplo:
$miGarage->Remove($autoUno);
En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos
los métodos.*/
require_once('Garage.php');
require_once('Auto.php');

$auto1 = new Auto("Toyota", "Rojo", 150000);
$auto2 = new Auto("Ford", "Azul", 200000);
$auto3 = new Auto("Renault", "Gris", 250000);
$auto4 = new Auto("Lexus", "Verde", 750000);

$garage = new Garage("Mi Garage");

$garage->Add($auto1); // Agrega auto1
$garage->Add($auto2); // Agrega auto2
$garage->Add($auto3); // Agrega auto3
$garage->MostrarGarage();
echo "intento agregar el auto1 que ya está en el garage: <br>";
$garage->Add($auto1); // Intenta

echo "<br>intento remover el auto4 que NO está en el garage: <br>";
$garage->Remove($auto4);
echo "<br> intento remover el auto1 que SI está en el garage: <br>";
$garage->Remove($auto1);
?>