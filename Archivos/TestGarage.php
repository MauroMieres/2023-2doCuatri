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

Garage::AltaGarage($garage);

Garage::LeerGarage("garage.csv");

?>