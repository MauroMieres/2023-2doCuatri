<?php 

class Auto{
    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha;

    //el constructor tiene parametros opcionales
    public function __construct($marca, $color, $precio = 0, $fecha = null) {
        $this->_marca = $marca;
        $this->_color = $color;
        $this->_precio = $precio;
        $this->_fecha = $fecha;
      }

      //metodo de instancia
    public function AgregarImpuestos($impuesto){
        $this->_precio = $this->_precio + $impuesto;
    }

    //metodo de clase 
    public static function MostrarAuto($auto)
    {
        echo "Marca: " . $auto->_marca . "<br>";
        echo "Color: " . $auto->_color . "<br>";
        if($auto->_precio != 0)
        echo "Precio: $" . $auto->_precio . "<br>";
        if($auto->_fecha != null)
        echo "Fecha: " . $auto->_fecha. "<br>";
    }

    //metodo de instancia >>> auto.Equals
    public function Equals ($auto){
        if ($this->_marca == $auto->_marca) {
            return 1;
        } else {
            return 0;
        }
    }

    //metodo de clase
    public static function Add($auto1,$auto2){
        if($auto1->_marca == $auto2->_marca and $auto1->_color == $auto2->_color)
            return $auto1->_precio + $auto2->_precio;
        echo "Los vehiculos no son de la misma marca y color" . "<br>";
        return 0;
    }
}
?>