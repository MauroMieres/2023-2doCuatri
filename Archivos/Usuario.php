<?php 
class Usuario{

    private $_nombre;
    private $_clave;
    private $_mail;

    public function __construct($nombre,$clave,$mail) {
        $this->_nombre = $nombre;
        $this->_clave = $clave;
        $this->_mail = $mail;
    }

    public function getNombre() {
        return $this->_nombre;
    }

    public function getClave() {
        return $this->_clave;
    }

    public function getMail() {
        return $this->_mail;
    }

    public static function AltaUsuario($usuario) {
        // Abre el archivo autos.csv en modo escritura (si no existe, se crea)
        $archivo = fopen('usuarios.csv', 'a');

        if(fputcsv($archivo, [
            $usuario->_nombre,
            $usuario->_clave,
            $usuario->_mail
       ])>1);
       echo "Registro de usuario exitoso <br>";

    fclose($archivo);

    }
}
?>