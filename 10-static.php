<?php include 'includes/header.php';

    // En los ejemplos anteriores hemos utilizado objetos y la palabra new seguido del nombre de la clase para crearlos
    // También existen los métodos estaticos, estos tienen como caracteristica que no requieres instanciar la clase y puedes acceder por medio de la clase en lugar del objeto

class DB {
    public static function conectarDB()
    {
        echo "Conectando a la BD...";
    }
}
class Email {
    public static function enviarEmail()
    {
        echo "Enviando Email...";
    }
}

DB::conectarDB();

echo "<br>";

Email::enviarEmail();
