<?php

// Classe base Animal
class Animal {
    // Atributos
    protected $nome;
    protected $idade;

    // Construtor
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Método que será sobrescrito nas classes filhas
    public function fazerSom() {
        // Método vazio na classe base
    }

    // Métodos para obter informações
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }
}

// Classe Cachorro que herda de Animal
class Cachorro extends Animal {
    // Sobrescrevendo o método fazerSom
    public function fazerSom() {
        return "Au au!";
    }
}

// Classe Gato que herda de Animal
class Gato extends Animal {
    // Sobrescrevendo o método fazerSom
    public function fazerSom() {
        return "Miau!";
    }
}

// Instanciando objetos das classes Cachorro e Gato
$cachorro = new Cachorro("Dentinho", 5);
$gato = new Gato("Toninho", 3);

// Exibindo as informações do cachorro
echo "Nome: " . $cachorro->getNome() . "<br>";
echo "Idade: " . $cachorro->getIdade() . " anos<br>";
echo "Som: " . $cachorro->fazerSom() . "<br><br>";

// Exibindo as informações do gato
echo "Nome: " . $gato->getNome() . "<br>";
echo "Idade: " . $gato->getIdade() . " anos<br>";
echo "Som: " . $gato->fazerSom() . "<br>";

?>
