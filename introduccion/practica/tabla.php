<!DOCTYPE html>

<html>
   <head>
       <meta charset="utf-8">
       <tittle>Enlaces</tittle>
   </head> 
    <body>
        
        <h1>Lista de usuarios</h1>
        <table>
        <?php 
        class registros{
            private $datos = array();
            private $fila = array();
            private $columna = array();
            
            public function injectDatos($col, $fil, $data)
            {
                $this->datos[] = $data;
                $this->fila[] = $fil;
                $this->columna[] = $col;
 
            }
          
            public function LlenarTabla()
            {
                
                
                for($i=0; $i < count( $this->columna) ; $i++){
                    for($i=0; $i < count( $this->fila) ; $i++){
                        
                        echo'<tr>
                            <td>'.'<strong>'. $this->columna[$i] .'</strong>'.'</td>
                            </tr>';
                       
                        echo'<tr>
                            <td>'.$this->fila[$i].' '.$this->datos[$i].'</td>
                            </tr>';
                            
                            
                     /*       
                        echo'<tr>
                            <td>'.'<strong>'. $this->columna[0] .'</strong>'.'</td>
                            <td>'.'<strong>'. $this->columna[1] .'</strong>'.'</td>
                            <td>'.'<strong>'. $this->columna[2] .'</strong>'.'</td>
                            </tr>';
                       
                        echo'<tr>
                            <td>'.$this->fila[0].' '.$this->datos[0].'</td>
                            <td>'.$this->fila[1].' '.$this->datos[1].'</td>
                            <td>'.$this->fila[2].' '.$this->datos[2].'</td>
                            </tr>';
                            */     
                    }
                }
            }
        }
        
        $registros = new registros();
        $registros->injectDatos('Nombre', '1', 'Sebastian');
        $registros->injectDatos('Apellido', '2','Gallego');
        $registros->injectDatos('edad', '3', '24');
        $registros->injectDatos('Nombre', '4', 'Diana');
        $registros->injectDatos('Apellido', '5','Calambas');
        $registros->injectDatos('edad', '6', '21');
        $registros->LlenarTabla();

    
        
        
        
        
        
        ?>
        
       </table> 
        
    </body>
    
    
</html>