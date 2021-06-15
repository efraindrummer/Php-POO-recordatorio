<?php include 'includes/header.php';
// en una clase en PHP las variables se les llama propiedades, a las funciones, se les llama métodos, y una clase puede tener muchas funciones para permitirle realizar ciertas tareas.

class MenuRestaurant {
    public $nombre = 'Nombre del Producto';
    public $precio = 0;

    // Crear una función que muestre el precio y nombre de un producto

    public function obtenerPrecioyNombre() 
    {
        return "El producto " . $this->nombre . " tiene un precio de: " . $this->precio;
    }
}


// Instanciar una clase
$bebida = new MenuRestaurant();
$postre = new MenuRestaurant();

// asignar las variables
$bebida->nombre = "Jugo de Naranja";
$bebida->precio = 30;
echo $bebida->obtenerPrecioyNombre();

echo "<br>";


// asignar las variables al postre (sino se asignan ira al default)
$postre->nombre = "Pastel de Chocolate";
$postre->precio = 30;
echo $postre->obtenerPrecioyNombre(); // nota como la sintaxis es similar a una función que se llama

echo "<br>";

// Que pasa si asignas un valor mal o que no existe?
$postre->categoria = 'Postre';
$postre->preci = 30;

echo "<pre>";
var_dump($bebida);
var_dump($postre);
echo "</pre>";

// acceder a las variable sde forma individual
echo $bebida->nombre;
