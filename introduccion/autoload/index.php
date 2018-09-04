<?php
 function autoload($class){
   /*en el iclude va la ruta de carpetas donde esta la clase que necesito asi que paso la clase*/
   /*le pngo al extensión ".php" para indicar que e un archivo php*/
   include "clases/auto/" . $class . ".php";
 }
/*creo una fucnion llamada autoload en la que entro a la clase, lo que hago es entrar a la carpeta y llamar la clase para posteriormente*/
 spl_autoload_register('autoload');

 Persona::mostrar("Hola como estas? <br>");
 Auto::show("Entendido <br>");
 Barra::mostrarvertical("<nav>
<li><a href=''>Gmail</a></li>
<li><a href=''>Facebook</a></li>
<li><a href=''>Twitter</a></li>
 </nav>");
 Barra::enlace("<nav>
<li><a href=''>Gmail</a></li>
<li><a href=''>Facebook</a></li>
<li><a href=''>Twitter</a></li>
 </nav>")
/* los dos puntos es para acceder a un metodo de la clase por ejemplo uso AUto que es la clase y entro al metodo show de esa clase que en su estructura me dice que va a mostrar un mensaje almacenado en una varable $mssage*/


 ?>
