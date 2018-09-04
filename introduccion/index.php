<?php

class Persona{
  //atributos
  public $nombre = "Sebastian";

  //Metodos
  public function hablar($mensaje){
    echo $mensaje;

  }

}

  $persona = new Persona();
  echo $persona->nombre;
  echo "<br>";
  echo $persona->hablar("Hola");
 ?>
