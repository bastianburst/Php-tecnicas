<?php
//las interfaces de objetos permiten crear codigo, con el cual se especificamos que metodos deben ser implementados con una clase.
//crear interfaces
//implementarlas implements
//estos deben ser implementados dentro de una clase
//problema ejercicio: el auto debe encender si tiene gasolina, a medida que se mueve la gasolina debe disminuir, al acbarse este debe detenerse.

interface Auto{
  public function encender();
  public function apagar();
}

interface Gasolina extends Auto{
  public function vaciarTanque();
  public function llenarTanque($cantidad);
}
class Deportivo implements Gasolina{
public $estado = false;
public $cantidad = 10;
public $reducir;

  public function encender(){
    if($this->estado){
      print "El auto no se puede encender dos veces <br>";
    }else{
       if($this->cantidad <= 0){
      print "El auto no puede encender porque el tanque esta vacio <br>";
    }else{
      print "Auto encendido <br>";
      $this->estado=true;
    }

  }
}
  public function apagar(){
    if($this->estado = false){
      print "el auto ya esta apagado <br>";
      }else{
      print "Apagado <br>";
      $this->estado =false;

    }

  }
  public function vaciarTanque(){
    $this->cantidad =0;

  }
  public function llenarTanque($cantidad){
    if($cantidad = 0){//si necesito pasarle el parametro desde abajo lo hacemos sin el this
      print "El tanque esta vacio <br>";
    }else{
      print "el tanque esta lleno <br>";
    }

  }
  public function estado(){
    if($this->estado = true){
      print "El auto esta encendido <br>";
    }else{
      print " el auto esta apagado <br>";

    }
  }

  public function usar($km){
    if($this->estado = true){
        $reducir= $km  / 5;
        $this->cantidad = $this->cantidad - $reducir;
        if($this->cantidad <= 0){
          $this->estado = false;
          print "el auto se ha quedado sin gasolina y se ha apagado <br>";

      }

    }
  }

}

$dep = new Deportivo();
$dep->encender();
$dep->llenarTanque(100);
$dep->estado();

$dep->usar(1);
?>
