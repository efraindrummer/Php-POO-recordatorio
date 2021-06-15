<?php include 'includes/header.php';

    // Los constructores fue de lo que mas me costo entender en PHP cuando comencé
    // Básicamente un constructor es una función que es llamada automaticamente, en el momento que creas una clase

    // en algunos lenguajes como el mismo PHP en versiones anteriores o Java se utiliza como constructor el nombre de la clase, en PHP se utiliza la palabra construct, 

class MenuRestaurant {
    public $nombre;
    public $precio;

    public function __construct( $nombre, $precio ) { // los constructores tienen a ser más útiles cuando toman variables 
        // echo "Desde el constructor, sin que nadie me llame";

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

// Instanciar una clase
$bebida = new MenuRestaurant('Jugo de Naranja', 30); // debes pasar los valores en el orden que se declaran y esa misma cantidad

echo "<pre>";
var_dump($bebida);
echo "</pre>";
echo $bebida->getNombre();


$postre = new MenuRestaurant('Pastel de Chocolate', 100);

echo "<pre>";
var_dump($postre);
echo "</pre>";

echo $postre->getNombre();
