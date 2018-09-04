<?php
class Loteria{
  //atributos
  public $numero;
  public $intentos;
  public $resultado=false;

  //Metodos
  public function __construct($numero, $intentos){//constructor
    $this->numero = $numero;
    $this->intentos= $intentos;

  }

  public function sorteo(){
    $minimo = $this->numero / 2;
    $maximo = $this->numero * 2;
    for($i=0; $i < $this->intentos; $i++){
      $numganador = rand($minimo, $maximo);
      self::intentos($numganador);

    }
  }

  public function intentos(){
    if($numganador == $this->numero){
      echo "<b>" . "El ganador es" . "|" . "==" . $this->numero . "</b><br>";
      $this->resultado=true;
    }else{
      echo $numganador. "!=". $this->numero . "<br>";
    }
  }

  public function __destruct(){//destructor
    if($this->resultado){//aqui estoy preguntando si es verdadero ya que resultado es boolean la negacion seria if(!$this->resultado)
        echo "Felicidades has ganado en" . $this->intentos . "intentos";
    }else{
      echo "haz perdido en " . $this->intentos .  " intentos";
    }
  }
}
$loteria = new Loteria(10,10);//cada que tenga un constructor y haga unas instancia a apartir de una clase debo pasarle los parametros que me pide el constructor
$loteria->sorteo();
?>
 <!--un metodo constructor siempre debe ser publico y nunca tiene return, este se ejecuta
 de manera automatica al momento de instanciar la clase, el constructor de una clase
 le asigna automaticamente cuando instancias a  partir de ella;  por otro lado el destructor
 aunque tambien debe ser publico se ejecuta automaticamente-->
