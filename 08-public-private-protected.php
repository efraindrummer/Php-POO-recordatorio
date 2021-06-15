<?php include 'includes/header.php';

// Modificadores de Acceso Public, Privated y Protected

class MenuRestaurant {
    public $nombre; // Se puede acceder en cualquier lugar, ya sea en la clase o en el objeto
    protected $precio; // Protected significa que solo se puede acceder por medio de la clase (via Getter) y de las subclasses
    // private $precio; // Private no puede ser accedido por los hijos, solamente la clase que lo tiene.

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

class Bebida extends MenuRestaurant {
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
echo $bebida->getPrecio();
echo "<br>";
// echo $bebida->precio;


$postre = new Postre('Pastel de Chocolate', 100, '300g');
echo $postre->getPrecio();
// echo $bebida->precio;