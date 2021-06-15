<?php include 'includes/header.php';


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

class Bebida extends MenuRestaurant { // ahora bebida es una clase hijo de MenuRestaurant o también se les dice Subclass
    public $medida;

    public function __construct( $nombre, $precio, $medida ) { 
        parent::__construct( $nombre, $precio  );
        $this->medida = $medida;
    }
    public function getPrecio()
    {
        return "El precio es: " . $this->precio;
    }
    public function getMedida()
    {
        return $this->medida;
    }
}

class Postre extends MenuRestaurant {
    public $peso;

    public function __construct( $nombre, $precio, $peso ) { 
        parent::__construct( $nombre, $precio );
        $this->peso = $peso;
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
echo $bebida->getPrecio();


$postre = new Postre('Pastel de Chocolate', 100, '300g');
echo "<pre>";
var_dump($postre);
echo "</pre>";
echo $postre->getNombre();
echo $postre->getPeso();