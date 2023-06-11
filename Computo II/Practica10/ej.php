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

    