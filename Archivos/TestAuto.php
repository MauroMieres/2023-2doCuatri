<?php 
require_once('Auto.php');

//● Crear dos objetos “Auto” de la misma marca y distinto color.
$auto1 = new Auto("Audi","Amarillo");
$auto2 = new Auto("Audi","Azul");

//● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio.
$auto3 = new Auto("Ford","Rojo",10000);
$auto4 = new Auto("Ford","Rojo",5000);

//● Crear un objeto “Auto” utilizando la sobrecarga restante.
$auto5 = new Auto("Mustang","Verde",7500,date("d/m/Y"));

//voy a mostrar los 3 autos antes de cargales el impuesto
Auto::MostrarAuto($auto3);
echo "<br>";
Auto::MostrarAuto($auto4);
echo "<br>";
Auto::MostrarAuto($auto5);
echo "<br>";

//● Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $ 1500 al atributo precio.
echo "AGREGO IMPUESTOS:"."<br>"."<br>";
$auto3->AgregarImpuestos(1500);
$auto4->AgregarImpuestos(1500);
$auto5->AgregarImpuestos(1500);

//los vuelvo a mostrar con impuestos
Auto::MostrarAuto($auto3);
echo "<br>";
Auto::MostrarAuto($auto4);
echo "<br>";
Auto::MostrarAuto($auto5);
echo "-----------------------------------------------------" . "<br>". "<br>";


//● Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el resultado obtenido. 
//da cero porque los primeros 2 autos son de la misma marca pero no del mismo color, entonces no se suman
Auto::MostrarAuto($auto1);
echo "<br>";
Auto::MostrarAuto($auto2);
echo "<br>";

$importe = Auto::Add($auto1,$auto2);

echo "El importe sumado entre el primer auto y segundo es: {$importe} " . "<br>" . "<br>";
echo "-----------------------------------------------------" . "<br>". "<br>";

//● Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o no.

echo "Auto 1:" . "<br>";
Auto::MostrarAuto($auto1);
echo "<br>";

echo "Auto 2:" . "<br>";
Auto::MostrarAuto($auto2);
echo "<br>";

echo "Auto 5:" . "<br>";
Auto::MostrarAuto($auto5);
echo "<br>";

echo "Son iguales el primero y segundo auto? : {$auto1->Equals($auto2)}". "<br>";
echo "Son iguales el primero y quinto auto? : {$auto1->Equals($auto5)}". "<br>";

echo "-----------------------------------------------------" . "<br>";
echo "Mostrar cada los objetos impares (1, 3, 5)" . "<br>"  . "<br>";


//● Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares (1, 3, 5)
echo "Auto 1:" . "<br>";
Auto::MostrarAuto($auto1);
echo "<br>";

echo "Auto 3:" . "<br>";
Auto::MostrarAuto($auto3);
echo "<br>";

echo "Auto 5:" . "<br>";
Auto::MostrarAuto($auto5);

echo "--------------------" ."<br>";
echo "Aplicación 19" ."<br>";
echo "Guardar autos en el CSV:" ."<br>";

Auto::altaAuto("Toyota Yaris GR","Rojo",75000,date("d/m/Y"));
Auto::altaAuto("Volkswagen POLO","Azul",65000,date("d/m/Y"));

echo "<br>" . "Leer autos cargados en el CSV:"."<br>";

Auto::leerAutos("autos.csv");

?>