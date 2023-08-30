<?php
/* MIERES MAURO 3C
Aplicación No 4 (Calculadora)
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.
*/
$operador = '/';
$op1 = 10;
$op2 = 3;
$noSeRealizoLaOperacion = false;

switch ($operador) {
    case '+':
        $resultado = $op1 + $op2;
        break;
    case '-':
        $resultado = $op1 - $op2;
        break;
    case '*':
        $resultado = $op1 * $op2;
        break;
    case '/':
        if($op2!=0) //siempre que el divisor sea diferente de cero hará la división
        $resultado = $op1 / $op2;
        else      {
            echo "No se puede dividir por cero!";
            $noSeRealizoLaOperacion = true;
        }      
        break;
    default:
        echo "Operador no válido";
        $noSeRealizoLaOperacion = true;
        exit;
}

//De esta forma valido que no se muestre el resultado si es nulo
if($noSeRealizoLaOperacion)
return;
echo $op1 . ' ' . $operador . ' ' . $op2 . ' : ' . $resultado;;
?>