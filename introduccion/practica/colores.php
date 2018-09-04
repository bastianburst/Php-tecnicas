<!DOCTYPE html>

<html>
   <head>
       <meta charset="utf-8">
       <tittle>Colores</tittle>
   </head> 
    <body>
        


        <?php 
        class titulo{
            private $ubicacion;
            private $colorfondo;
            private $colorfuente;
            private $tamano;
            private $titulo;
 

            public function __construct($titulo, $ubicacion, $colorfuente, $colorfondo, $tamano)
            {
                $this->ubicacion = $ubicacion;
                $this->colorfuente=$colorfuente;
                $this->colorfondo=$colorfondo;
                $this->tamano=$tamano;
                $this->titulo=$titulo;  
            }
            
            public function mostrartitulo(){
                echo '<header style="background-color: '.$this->colorfondo.';">
                <h1 style="color:'.$this->colorfuente.'; text-align: '.$this->ubicacion.';font-size:'.$this->tamano.'px;">' .$this->titulo.'</h1></header>';

            }
            
            
        }
        
        $titulo = new titulo('Hola','center', 'red', 'black', '15');
        $titulo->mostrartitulo();
        
        $titulo2 = new titulo('Hola','left', 'gray', 'black', '20');
        $titulo2->mostrartitulo();
       
        
        
        ?>
        

        
    </body>
    
    
</html>