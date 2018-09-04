<?php
class Vehiculo{
  public $motor=false;
  public $marca;
  public $color;
/*
  public function __construct($motor){
    $this->motor = $motor;
  }//no es necesario el contructor
  */
  public function estado(){
    if($this->motor == true){
      echo "El motor: " . "esta encencido <br>";
    }else{
      echo "El motor: " . "esta apagado <br>";

    }
  }
  public function encender(){
    if($this->motor == true){
      echo "El motor ya esta encencido " . $this->motor . "<br>";
    }else{
      echo $this->motor = true . "encender motor <br>";

    }
  }
}

class Moto extends Vehiculo{//para definir herencia se usa la palabra extends class estends class, indicando que la clase moto se extiende de la clase vehiculo.
    public function estadoMoto(){
      $this->estado();
    }
}
$moto = new Moto();
$moto->estado();//moto puede hacer uso de los metodos de vehiculo ya que la heredo.
$moto->estadoMoto();

/*

$vehiculo1 = new Vehiculo(false);
$vehiculo1 -> estado();
$vehiculo1 -> encender();
$vehiculo1 -> estado();
*/



?>
