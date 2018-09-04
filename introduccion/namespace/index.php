<?php
/*el sp autoload register siempre lo suo su fncion es vigilar el archivo creado en el controller u otro y estar pendiente para hacer us de ella*/
  spl_autoload_register(function($clase){
    $ruta = "api/" . str_replace("\\","/", $clase  ). ".php";
    if (is_readable($ruta)) {
    require_once $ruta;

    }else{
      echo "El archivono existe";
    }

  });
  models\Persona::hola();
  controllers\Persona::hola();
 ?>
