<?php 
class Garage{
    private $_razonSocial;//string
    private $_precioPorHora;//double
    private $_autos;//array de autos

    public function __construct($razonSocial, $precioPorHora = 0) {
        $this->_razonSocial = $razonSocial;
        $this->_precioPorHora = $precioPorHora;
        $this->_autos = array();
    }

    public function getRazonSocial() {
        return $this->_razonSocial;
    }

    public function getPrecioPorHora() {
        return $this->_precioPorHora;
    }

    public function getAutos() {
        return $this->_autos;
    }

    public function MostrarGarage() {
        echo "<strong>Razón social:</strong> {$this->_razonSocial}<br>";
        echo "<strong>Precio por hora:</strong> {$this->_precioPorHora}<br>";
        echo "<strong>Autos:</strong><br>";
        foreach($this->_autos as $auto) {
            Auto::MostrarAuto($auto);
            echo "<br>";
        }
    }

    public function Equals($autoParametro){
        foreach($this->_autos as $autoBucle) {
            if($autoParametro===$autoBucle)
            return 1;
        }   
        return 0;
    }

    public function Add($autoNuevo){
        if(!$this->Equals($autoNuevo)){
            array_push($this->_autos, $autoNuevo) ;
        }           
            else
            echo "El auto ya se encuentra en el garage<br>";
    }

    public function Remove($auto) {
        $key = array_search($auto, $this->_autos);
        if ($key !== false) {
            unset($this->_autos[$key]);
            echo "Se removió el auto del garage. <br>";
        } else {
            echo "Este auto no está en el garage. <br>";
        }
    }

public static function AltaGarage($miGarage){
        $archivo = fopen('garage.csv', 'a');

// Crear un array para almacenar los datos de cada columna
$columnas = [];

// Agregar los datos del Garage al array de columnas
$columnas[] = $miGarage->getRazonSocial();
$columnas[] = $miGarage->getPrecioPorHora();

// Agregar los datos de cada Auto al array de columnas
    foreach ($miGarage->getAutos() as $auto)
    {
        $columnas[] = $auto->getMarca();
        $columnas[] = $auto->getColor();
        $columnas[] = $auto->getPrecio();
        
        // Verificar si la fecha está presente antes de agregarla
        $fecha = $auto->getFecha();
        if ($fecha !== null && $fecha !== '') {
            $columnas[] = $fecha;
        } else {
            $columnas[] = ''; // Puedes usar un valor predeterminado o una cadena vacía
        }
    }

    // Convertir el array de columnas en una línea de CSV
    $lineaCSV = implode(',', $columnas);

    // Escribe la línea de CSV en el archivo
    fwrite($archivo, $lineaCSV . PHP_EOL);

    // Cierra el archivo
    fclose($archivo);
    echo "Se guardó el garage en el CSV. <br>";
}

    public static function LeerGarage($nombreCSV)
    {
        $lineas = [];
        // Abrir el archivo garage.csv en modo lectura
        $archivo = fopen('garage.csv', 'r');

        if ($archivo) 
        {
                while (($linea = fgets($archivo)) !== false)
            {
                // Agregar la línea al array de líneas
                $lineas[] = $linea;
            }
        }
        // Cerrar el archivo
        fclose($archivo);

        foreach($lineas as $garage){
            echo $garage . "<br>";
        }
    }    

}    
?>