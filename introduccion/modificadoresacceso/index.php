<?php
class Facebook{
  //attributes
  public $nombre;
  public $edad;
  private $pass;
  //Metodos
  public function __construct($nombre, $edad, $pass){
    $this->nombre = $nombre;
    $this->edad = $edad;
    $this->pass = $pass;
  }

  public function verInformacion(){
    echo "Nombre: " . $this->nombre . "<br>";
    echo "Edad: " . $this->edad . "<br>";
    echo "Password: " . $this->pass . "<br>";
  }

  private function cambiarPass(){
    $this-> pass = $pass;
  }
}

$facebook = new Facebook('Sebastian', 18, '1234');
$facebook -> verInformacion();
$facebook -> cambiarPass();
echo $facebook->pass;
?>
