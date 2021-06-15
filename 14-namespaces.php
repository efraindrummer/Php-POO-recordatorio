<?php include 'includes/header.php';


    // PHP no soporta paquetes como si hace Java por ejemplo
    // Los namespaces llegan a ser útiles porque es como un Paquete, y tiene la caracteristica de que incluso 2 classes que se llamen igual pueden ser utilizadas


    // en PHP por ejemplo no puede haber 2 classes que se llamen igual de esta forma

    require_once 'Empleado.php';

    echo "<br>";

    class Empleado {
        public function __construct() {
            echo "desde 14-namespaces.php";
        }
    }

    $empleado = new Empleado();