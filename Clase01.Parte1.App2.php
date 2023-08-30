<?php
$fechaActual = date("Y-m-d");
$formatoLargo = date("d/m/Y");
$diaSemana = date("l");
$mes = date("n");
$dia = date("j");
$estacion = "";

switch ($mes) {
    case 1: case 2:
        $estacion = "Verano";
        break;
    case 3: if ($dia >= 21) $estacion = "Otoño"; else $estacion = "Verano"; break;
    case 4: case 5:
        $estacion = "Otoño";
        break;
    case 6: if ($dia >= 21) $estacion = "Invierno"; else $estacion = "Otoño"; break;
    case 7: case 8:
        $estacion = "Invierno";
        break;
    case 9: if ($dia >= 21) $estacion = "Primavera"; else $estacion = "Invierno"; break;
    case 10: case 11:
        $estacion = "Primavera";
        break;
    case 12: if ($dia >= 21) $estacion = "Verano"; else $estacion = "Primavera"; break;
}

$diaSemanaTraducido = traducirDiaSemana($diaSemana);
$nombreMes = ucfirst(nombreMes($mes));

echo "Fecha actual (Y-m-d): $fechaActual<br>";
echo "Fecha actual (d/m/Y): $formatoLargo<br>";
echo "Fecha personalizada: $diaSemanaTraducido $dia de $nombreMes, " . date("Y") . ", $estacion";

function nombreMes($mesNumero) {
    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    return $meses[$mesNumero - 1];
}

function traducirDiaSemana($diaSemanaIngles) {
    $diasSemana = array(
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Miércoles",
        "Thursday" => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sábado",
        "Sunday" => "Domingo"
    );
    return $diasSemana[$diaSemanaIngles];
}
?>
