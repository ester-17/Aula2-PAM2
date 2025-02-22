<?php
    // variavel
    //qtdRoda
class Automovel{
    // public, private, protected
    //propriedade
    public $qtdRoda ;
    public $motor ;
    public $renavan ;
    public $cor ;
    public $qtdPorta ;
    public $modelo ;
    public $fabricante ;
    public $anoFab ;

    // metodos
    public function acelerar($vel ){
        echo    $vel ." kh ";

    }

    // modificadores
        // atribuir
        public function set_QtdePort($value){
            $this->qtdPorta = $value ;
        }
        //exibir
        public function get_QtdPort($value){
            return $this->qtdPorta ;
        }

        

        //----------motor---------------
        public function set_Motor($arg){
            $this->motor = $arg ;
        }

        public function get_Motor(){
            return $this->motor ;
        }


       //----------Modelo--------------
       public function set_Modelo($arg){
            $this->Modelo = $arg ;
       }

       public function get_Modelo(){
            return $this->Modelo ;
       }

       
        // magicos
        
        public function __set( $name, $value ){
            $this->name = $value;
        }
        public function __get($name){
            return $this->name; 
        }

}


//criar um objeto

$aut01 = new Automovel();
$aut02 = new Automovel();

//$aut01->modelo = "astra";
$aut01->qtdRoda = 5;
//$aut01->motor = 2.0;
$aut01->renavan = "1234455";
$aut01->cor = "prata";
$aut01->fabricante = "chev";
$aut01->anoFab = "1999";
//$aut01->qtdPorta = 3;
$aut01->set_QtdPort(3);
$aut01->_set(" modelo", "astra");
//$aut01->get_QtdePort(4);

//$aut02->-modelo = "GOL GTS";

//echo " MODELO : " . $aut01->modelo;
echo "<br>";
echo " MOTOR : " . $aut01->get_Motor(); // get
echo "<br>";
echo " Porta : " . $aut01->get_QtdePort();
echo "<br>";
echo $auto01->acelerar(180);
echo "<hr>";
//echo " MODELO : " . $aut02->modelo ;
echo "<br>";
echo $aut02->acelerar( 100 );

echo "<hr>";

$aut01 ->qtdPorta = 2;
$aut01 ->motor = 3.2;

echo "<p> get - qtdPorta ". $aut01 ->qtdPorta ."</p>";
echo "<p> get - motor ". $aut01 ->motor ."</p>";
