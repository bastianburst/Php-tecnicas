<!DOCTYPE html>

<html>
   <head>
       <meta charset="utf-8">
       <tittle>Enlaces</tittle>
   </head> 
    <body>
        <?php 
        class enlaces{
            private $enlaces = array();
            private $titulos = array();
            
            public function infoEnlace($ent, $tit)
            {
                $this->enlaces[] = $ent;
                $this->titulos[] = $tit;
            }
            
            public function mostrarHorizontal()
            {
                for($i=0; $i < count($this->enlaces) ; $i++){
                    echo '<a href="'.$this->enlaces[$i] . '" target="_blanck">' . $this->titulos[$i] . '</a>';
                    echo ' - ';

                }
            }
            
            
            public function mostrarVertical()
            {
                for($i=0; $i < count($this->enlaces) ; $i++){
                    echo '<br>';
                    echo '<a href="'.$this->enlaces[$i] . '" target="_blanck">' . $this->titulos[$i] . '</a>';
                    echo ' <br> ';
                }
            }
        }
        
        $enlaces = new enlaces();
        $enlaces->infoEnlace('http://www.google.com', 'Google');
        $enlaces->infoEnlace('http://www.facebook.com', 'Facebook');
        $enlaces->infoEnlace('http://www.twitter.com', 'Twitter');
        $enlaces->mostrarHorizontal();
        $enlaces->mostrarVertical();
        
        
        
        
        
        ?>
        
        
        
    </body>
    
    
</html>