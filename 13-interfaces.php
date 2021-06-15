<?php include 'includes/header.php';


// Las interfaces son plantillas para tus classes, no es buena idea poner abstración o lógica en ella, solo la forma que deberán tener las classes, como dije anteriormente, son solamente una plantilla

interface RestaurantInterface 
{
    public function getNombre();
    public function getPrecio() : int;

    // Con parametros
    public function setPrecio($precio);
}

class MenuRestaurant implements RestaurantInterface {  // añadimos implements para añadir la interface
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

    public function getPrecio() : int
    {
        return $this->precio;
    }

    public function setPrecio($precio)  // quitar y ponerlo 
    {
        $this->precio = $precio;
    }
}


$menu = new MenuRestaurant("Platillo", "12.9");

var_dump($menu);
