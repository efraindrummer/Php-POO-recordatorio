<?php include 'includes/header.php';

    // Existen 4 principios en la programación orientada a objetos
    // Herencia, Encapsulación, Abstracción y Polimorfismo, Veamos que es herencia.

    class MenuRestaurant {
        public $nombre;
        public $precio;
    
        public function __construct( $nombre, $precio ) { 
            $this->nombre = $nombre;
            $this->precio = $precio;
        }
    
        public function getNombre() 
        {
            return $this->nombre;
        }
    
        public function getPrecio()
        {
            return $this->precio;
        }
    }

    class Bebida {
        public $nombre;
        public $precio;
        public $medida;
    
        public function __construct( $nombre, $precio, $medida ) { 
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->medida = $medida;
        }
    
        public function getNombre() 
        {
            return $this->nombre;
        }
    
        public function getPrecio()
        {
            return $this->precio;
        }
        public function getMedida()
        {
            return $this->medida;
        }
    }

    class Postre {
        public $nombre;
        public $precio;
        public $peso;
    
        public function __construct( $nombre, $precio, $peso ) { 
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->peso = $peso;
        }
    
        public function getNombre() 
        {
            return $this->nombre;
        }
    
        public function getPrecio()
        {
            return $this->precio;
        }

        public function getPeso()
        {
            return $this->peso;
        }
    }



$bebida = new Bebida('Jugo de Naranja', 30, '300ml'); 
echo "<pre>";
var_dump($bebida);
echo "</pre>";
echo $bebida->getNombre();
echo $bebida->getMedida();


$postre = new Postre('Pastel de Chocolate', 100, '300g');
echo "<pre>";
var_dump($postre);
echo "</pre>";
echo $postre->getNombre();
echo $postre->getPeso();