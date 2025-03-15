<?php
include("08.php");

class Retangulo extends Shape{

    //metodo
    function getCalAreal(){
        return$this->base * $this->altura;
    }

}

$obRect = new Rectangle();
$obRect->base = 2;
$obRect->altura = 10;

?>