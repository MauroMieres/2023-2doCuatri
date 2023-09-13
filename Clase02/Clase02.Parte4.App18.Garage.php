<?php 
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