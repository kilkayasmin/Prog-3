<?php 

class produto{
    public $nome;
    public $preco;
    public $quantidade;

    public function exibirInformacoes() {
        echo "Nome: {$this-> nome}, Preço: {$this-> preco}, Quantidade:  {$this-> quantidade} . <br>";
    }

}

      $produto1 = new produto();
    $produto1->nome = "Caneta"; 
    $produto1->preco = " 2.5"; 
    $produto1->quantidade = " 10"; 
    $produto1->exibirInformacoes();

      $produto2 = new produto();
    $produto2->nome = " Caderno";
    $produto2->preco = " 9.5";
    $produto2->quantidade = " 15";
    $produto2->exibirInformacoes();

    function mostrarMediaPrecos($produto1, $produto2)
    {
        $media = ($produto1 -> preco + $produto2 -> preco) /2;
        echo "A média dos preços dos produtos é: R$ " . number_format($media, 2, ',', '.') . "<br>"; 
    }
    
    mostrarMediaPrecos($produto1, $produto2);

    
    

?>