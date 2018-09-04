<!DOCTYPE html>

<html>
   <head>
       <meta charset="utf-8">
       <tittle>Enlaces</tittle>
   </head> 
    <body>
        
        <h1>Lista de usuarios</h1>

        <?php 
        class registros{
            private $data = array();
            private $filas;
            private $columnas;

            public function __construct($col, $fil)
            {
                $this->filas = $fil;
                $this->columnas=$col;   
            }
            
            public function cargar($fil, $col, $datos){
                $this->data[$fil][$col]= $datos;
            }
            
            public function crearTabla(){
                echo '<table border="1">';
            }
          
            public function inicioFila(){
                echo "<tr>";
            }
            public function show($fil, $col){
                echo '<td>' . $this->data[$fil][$col] . '</td>';
            }
            public function finFila(){
                echo "</tr>";
            }
            public function finTabla(){
                echo "</table>";
            }
            public function crear(){
                $this->crearTabla();
                for ($i=0; $i < $this->filas; $i++){
                    $this->inicioFila();
                    for($j=0; $j < $this->columnas; $j++){
                        $this->show($i, $j);
                        
                    }
                    $this->finFila();
                }
                $this->finTabla();
            }
                
        }
        
        $registro = new registros(2,2);
        $registro->cargar(0,0,10);
        $registro->cargar(0,1,10);
        $registro->cargar(1,0,10);
        $registro->cargar(0,2,10);
        $registro->cargar(2,3,5);
        $registro->cargar(1,1,5);
        $registro->cargar(2,0,5);
        $registro->crear();
       
        
        
        ?>
        

        
    </body>
    
    
</html>