<?php

class Livro {
    // Atributos privados
    private $titulo;
    private $autor;
    private $ano_publicacao;
    private $preco;

    // Construtor da classe
    public function __construct($titulo, $autor, $ano_publicacao, $preco) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano_publicacao = $ano_publicacao;
        $this->preco = $preco;
    }

    // Métodos para obter os valores dos atributos
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getAnoPublicacao() {
        return $this->ano_publicacao;
    }

    public function getPreco() {
        return $this->preco;
    }

    // Métodos para definir os valores dos atributos
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setAnoPublicacao($ano_publicacao) {
        $this->ano_publicacao = $ano_publicacao;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }
}

// Exemplo de uso da classe Livro
$livro1 = new Livro("1984", "George Orwell", 1949, 29.90);

echo "Título: " . $livro1->getTitulo() . "\n";
echo "Autor: " . $livro1->getAutor() . "\n";
echo "Ano de Publicação: " . $livro1->getAnoPublicacao() . "\n";
echo "Preço: R$ " . number_format($livro1->getPreco(), 2, ',', '.') . "\n";

?>
