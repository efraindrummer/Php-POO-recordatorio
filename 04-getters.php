<?php include 'includes/header.php';

    // los getters son una convención que existe en la programación orientada a objetos para obtener un valor que existe en un objeto

    class MenuRestaurant {
        public $nombre = 'Nombre del Producto';
        public $precio = 0;
    
        // Crear una función que muestre el precio y nombre de un producto
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
$bebida = new MenuRestaurant();
$postre = new MenuRestaurant();

// asignar las variables
$bebida->nombre = "Jugo de Naranja";
$bebida->precio = 30;
echo $bebida->getNombre();
echo $bebida->getPrecio();


// asignar las variables al postre (sino se asignan ira al default)
$postre->nombre = "Pastel de Chocolate";
$postre->precio = 30;
echo $postre->getNombre();
echo $postre->getPrecio();


    