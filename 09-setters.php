<?php include 'includes/header.php';

    // existe otra convención en PHP que son los llamados SETTERS, utilizas GET para obtener un valor, SET para añadir un valor
    // Los constructores siguen siendo útiles, vas a utilizarlos cuando requieres crear un objeto con cierta información
    // pero algunas veces quieres agregar un valor después de que el objeto fue creado:



    class MenuRestaurant {
        public $nombre;
        public $precio;
        protected $categoria; // Protected significa que solo la clase o sus subclasses pueden acceder a su valor
    
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

        public function setCategoria($categoria) 
        {
            return $this->categoria = $categoria;
        }
        public function getCategoria()
        {
            return $this->categoria;
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

    $bebida->setCategoria( 'Bebidas' ); // se asigna después // cambiarla a protected

    // el hecho de que sea protected recuerda hace que no puedas hacer algo asi
    echo $bebida->getCategoria();


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