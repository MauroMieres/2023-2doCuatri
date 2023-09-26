<?php 

require_once "../Archivos/Usuario.php";

echo "<h1> Aplicación 20 Bis - Registro CSV <h1>";

if(isset($_POST["nombre"]) &&isset($_POST["clave"]) && isset($_POST["mail"])){

    $usuario = new Usuario($_POST["nombre"],$_POST["clave"],$_POST["mail"]);

    Usuario::AltaUsuario($usuario);
}else{
    echo "Parametros incorrectos.";
}

?>