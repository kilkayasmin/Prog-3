
<?php


class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function andar() {
        echo "Andou";
    }

    public function parar() {
        echo "Parou";
    }
}


class Caminhao extends Veiculo {
    public function carregarCarga() {
        echo "Carga carregada com sucesso!";
    }
}


class Moto extends Veiculo {
    public function andar() {
        echo "Moto está em movimento";
    }

    public function darGrau() {
        echo "Deu grau!";
    }
}

class Carro extends Veiculo {
    public $tipoCombustivel;

    public function mostrarCombustivel() {
        echo "O tipo de combustível é: " . $this->tipoCombustivel;
    }

    public function ligarLimpador() {
        echo "Limpador ligado";
    }
}


$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->tipoCombustivel = "Gasolina";
$carro->andar();
echo "<br>";
$carro->ligarLimpador();
echo "<br>";
$carro->mostrarCombustivel();

echo "<hr>";

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2017;
$moto->parar();
echo "<br>";
$moto->darGrau();
echo "<br>";
$moto->andar(); 
echo "<hr>";


class CarroEletrico extends Carro {
    public function carregarBateria() {
        echo "Bateria carregada";
    }
}

$carroEletrico = new CarroEletrico();
$carroEletrico->modelo = "Tesla Model S";
$carroEletrico->cor = "Preto";
$carroEletrico->ano = 2020;
$carroEletrico->tipoCombustivel = "Elétrico";
$carroEletrico->andar(); 
echo "<br>";
$carroEletrico->ligarLimpador(); 
echo "<br>";
$carroEletrico->carregarBateria(); 

?>