<?php

class Imoveis {

    public function __construct($arg01, $arg02, $arg03, $arg04, $arg05) {
        $this->tipoImovel = $arg01;
        $this->valor = $arg02;
        $this->regiao = $arg03;
        $this->metragem = $arg04;
        $this->descricao = $arg05;
    }

    private string $tipoImovel;
    protected float $valor;
    public string $regiao;
    protected float $metragem;
    private string $descricao;

    // Magic methods
    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name; // Corrected to access the property dynamically
    }
}




class rural extends Imoveis {

    // You can define additional properties or methods here if needed
}

$Imovel02 = new rural();

$Imovel01 = new Imoveis("Comercial", 1000000.00, "ZonaNorte", 50000, "Espaço bem localizado em av...");
echo "--------------\n";
echo $Imovel01->regiao . "\n";
echo $Imovel01->tipoImovel . "\n";
echo $Imovel01->descricao . "\n";
echo $Imovel01->valor . "\n";
echo $Imovel01->metragem . "\n";

?>
