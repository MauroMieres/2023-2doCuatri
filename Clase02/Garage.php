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
}
?>