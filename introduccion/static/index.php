<?php
//los metodos estaticos se usan para subrutinas que una clase necesita, y que se puden llamar cuando los necesites.
class Pagina{


  public $nombre="aprendiendo php";
  public static $url="www.fabianrojasweb.com";//una propiedad static no puede ser accedida con un ojeto de clase instanciado.
  //un metodo estatico no puede acceder a los atributos de la clase.


  public function bienvenida(){

    echo "Bienvenidos <b>a mi sitio</b>" . $this->nombre . "ok la pagina es " . $this->url;
  }

  public static function bienvenida2(){
      echo "Bienvenidos <b>a mi sitio</b> ok la pagina es " . $this->url;

  }

}

$bienvenid = new Pagina();
$bienvenid->bienvenida();
$bienvenid->bienvenida2();


 ?>
