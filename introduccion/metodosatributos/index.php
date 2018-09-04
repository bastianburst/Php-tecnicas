<?php


class Persona{
  //atributos
  public $nombre = array();
  public $apelido = array();//esto s un arreglo

  //Metodos
  public function guardar($nombre, $apellido){//funcion para guardar
    $this->nombre[] = $nombre;//this es ara crear instancia de clase con esto no tenemos que escribir de nuevo el ombre de la clase solo this->
    $this->apellido[] = $apellido;//al poner los [] le digo que ese campo era un vector simplemente estoy ya lo tomoa como array

  }
  public function mostrar(){//este es un metodo para recorrer el array, debe recorrer cada elemento dentro de este.
    for ($i=0; $i < count($this->nombre); $i++) {//i = la posicion 0 del array
      self::formato($this->nombre[$i], $this->apellido[$i]);//para llamar otra funcion a esta usamos self::nombre_funcion

    }
  }

  public function formato($nombre, $apellido){
    echo "nombre: " . $nombre . " | Apellido: " . $apellido . "<br>";
  }
}

  $persona = new Persona();
  $persona->guardar("Sebastian", "Gallego");//aca llamamos las funciones y les damos datos
  $persona->guardar("Diana","Calambas");
  $persona->guardar("Natalia","Paris");
  $persona->mostrar();


 ?>
