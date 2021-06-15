<?php include 'includes/header.php';

// Una clase astracta es una que no se puede instanciar, en cambio sirve como base para otras clases
// Nuestra clase de MenuRestaurant es un buen ejemplo de una clase que actua como base para otras clases.


abstract class MenuRestaurant {  // agregando abstract evitamos que alguien la utilice para instanciarla
    public $nombre; 
    protected $precio;

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

// No se puede instanciar

$menu = new MenuRestaurant('Nuevo Elemento en el Menú', 50);
echo "<pre>";
var_dump($menu);
echo "</pre>";
