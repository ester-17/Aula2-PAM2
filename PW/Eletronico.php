<?php

class Eletronico
{
    // construtor, Inicializa
    function __construct($arg01, $arg02){
        $this->categoria = $arg01;
        $this->voltagem = $arg02;
    }
    // propriedade
    private $categoria;
    private $voltagem;
    private $nome;

    // metodos 
    public function get_categoria($arg){
        $this->categoria = $arg01 ;
    }
    public function set_categoria($arg){
        return $this->categoria ;
    }



}

$eletroCozinha = new Eletronico("Domestico", 127);
echo "  categoria  " . $eletroCozinha->
