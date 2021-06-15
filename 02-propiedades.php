<?php include 'includes/header.php';

    // las classes tienen variables, que son llamadas propiedades, una propiedad contiene información que pertenece a un objeto
    class MenuRestaurant {
        
        public $nombre = 'Nombre del Producto'; // Public se asegura que podamos acceder a la propiedad desde fuera de la clase, lo veremos más adelante
        public $precio = 0;
    
    }
    
    
    // Instanciar una clase
    $bebida = new MenuRestaurant();
    $postre = new MenuRestaurant();

    // para asignar valores a los objetos, se utiliza una sintaxis de flecha:

    // asignar las variables
    $bebida->nombre = "Jugo de Naranja";
    $bebida->precio = 30;



    // asignar las variables al postre (sino se asignan ira al default)
    $postre->nombre = "Pastel de Chocolate";
    $postre->precio = 30;

    // Que pasa si asignas un valor mal o que no existe?
    $postre->categoria = 'Postre';
    $postre->preci = 30;

    echo "<pre>";
    var_dump($bebida);
    var_dump($postre);
    echo "</pre>";

    // para acceder a las variable sde forma individual también se utiliza la sintaxis de flecha
    echo $bebida->nombre;


    // la sintaxis de flecha es propia de los objetos, en el caso de un arreglo por ejemplo
    $bebidaArreglo = [
        'nombre' => 'Nombre de la bebida',
        'precio' => 30
    ];
    echo $bebidaArreglo['nombre'];