<?php

class Produto {
    // Atributos da classe
    private $nome;
    private $preco;
    private $quantidade;

    // Construtor
    public function __construct($nome, $preco, $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    // Método para exibir informações do produto
    public function exibirInformacoes() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
        echo "Quantidade em estoque: " . $this->quantidade . "<br>";
    }

    // Método para atualizar a quantidade de produtos em estoque
    public function atualizarQuantidade($quantidade) {
        $this->quantidade += $quantidade;
    }

    // Método para calcular o valor total do estoque
    public function calcularValorTotal() {
        return $this->preco * $this->quantidade;
    }
}

// Instanciando e testando a classe
$produto1 = new Produto("Produto A", 10.50, 100);
$produto2 = new Produto("Produto B", 25.00, 50);

// Exibindo informações do produto 1
$produto1->exibirInformacoes();
echo "Valor total do estoque: R$ " . number_format($produto1->calcularValorTotal(), 2, ',', '.') . "<br><br>";

// Exibindo informações do produto 2
$produto2->exibirInformacoes();
echo "Valor total do estoque: R$ " . number_format($produto2->calcularValorTotal(), 2, ',', '.') . "<br><br>";

// Atualizando a quantidade do produto 1
$produto1->atualizarQuantidade(20);
echo "Após atualização:<br><br>";
$produto1->exibirInformacoes(); 
echo "Valor total do estoque: R$ " . number_format($produto1->calcularValorTotal(), 2, ',', '.') . "<br><br>";

?>
