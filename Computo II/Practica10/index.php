
<?php
    //clase abstracta
    abstract class Mascota{
        public $nombre;

        public function saludar(){
            echo "Funcion no abstracta";
        }
        //metodo abstracto                            
        abstract function getNombre();
    }

    //establecer herencia
    class Gato extends Mascota{
        public function getNombre(){
            return $this->nombre;
        }
    }

    $gato = new Gato();
    $gato->nombre = "Firulay";
    echo $gato->saludar();
    echo $gato->getNombre();

    //interfaces
    interface IMascota{
        public function getNombre();
    }

    interface IMamifero{
        public function sonido();
    }
    
    //implementacion de interfaces
    class Gato implements IMascota, IMamifero{
        private $nombre;
        private $edad;

        function_construct($_nombre, $_edad){
            $this->nombre = $_nombre;
            $this->edad = $_edad;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getEdad(){
            return $this->edad;
        }
        public function sonido(){echo "miau"; }
    }
    $gato = new gato("Firulay, 1");
    echo #gato->getNombre();
    echo $gato->getEdad();
    $gato->sonido();

    //EJERCICIO
    abstract class Instrumento{
        public $tipo;

        public function tocar(){
            echo "Funcion no abstracta";
        }
        abstract function getTipo();
    }

    class Guitarra extends Instrumento{
        public function getTocar(){
            return $this->tipo;
        }
    }
    $guitarra = new Guitarra();
    $guitarra->tipo = "Clasico";
    echo $guitarra->getTipo();

    $saxofon = new Saxofon();
    $saxofon->tipo = "Jazz";
    echo $saxofon->getTipo();

    $violin = new Violin();
    $violin->tipo = "Opera";
    echo $violin->getTipo();

    //ejercicio
        interface IVolante{
            public function getGirar();
        }
    
        interface IPito{
            public function getPitar();
        }
        
        //implementacion de interfaces
        class Coche implements IVolante, IPito{
            private $nombre;
            private $edad;
    
            function_construct($_nombre, $_edad){
                $this->nombre = $_nombre;
                $this->edad = $_edad;
            }
            public function getNombre(){
                return $this->nombre;
            }
            public function getEdad(){
                return $this->edad;
            }
            public function sonido(){echo "miau"; }
        }
        $gato = new gato("Firulay, 1");
        echo #gato->getNombre();
        echo $gato->getEdad();
        $gato->sonido();

        