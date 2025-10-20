<?php

abstract class Veiculo {
    protected $modelo;
    protected $ano;

    public function __construct($modelo, $ano) {
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    abstract public function mover();
}

class Carro extends Veiculo {
    public function mover() {
        echo "<p>O carro {$this->modelo} está acelerando pelas ruas!</p>";
    }
}

class Bicicleta extends Veiculo {
    public function mover() {
        echo "<p>A bicicleta {$this->modelo} está pedalando pela ciclovia!</p>";
    }
}

$carro1 = new Carro("Toyota Corolla", 2022);
$carro1->mover();

$bike1 = new Bicicleta("Caloi Elite", 2021);
$bike1->mover();

?>
