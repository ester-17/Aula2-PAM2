<?php

class Funcionario {
    // Atributos
    public $nome;          // Atributo público
    protected $salario;    // Atributo protegido
    private $senha;       // Atributo privado

    // Construtor
    public function __construct($nome, $salario, $senha) {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->senha = $senha;
    }

    // Método para exibir informações do funcionário
    public function exibirInformacoes() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Salário: R$ " . number_format($this->salario, 2, ',', '.') . "<br>";
    }

    // Getter para o atributo salario
    public function getSalario() {
        return $this->salario;
    }

    // Setter para o atributo senha
    public function setSenha($novaSenha) {
        $this->senha = $novaSenha;
    }

    // Método para aumentar o salário
    public function aumentarSalario($percentual) {
        $aumento = $this->salario * ($percentual / 100);
        $this->salario += $aumento;
    }
}

// Instanciando e testando a classe Funcionario
$funcionario = new Funcionario("João", 3000.00, "senha123");

// Exibindo informações do funcionário
$funcionario->exibirInformacoes();

// Aumentando o salário
$funcionario->aumentarSalario(10); // Aumenta o salário em 10%
echo "Após aumento:<br>";
$funcionario->exibirInformacoes();

// Alterando a senha
$funcionario->setSenha("novaSenha456");
echo "Senha alterada com sucesso!<br>";

// Tentativas de acesso aos atributos
echo "Tentativa de acessar o nome diretamente: " . $funcionario->nome . "<br>"; // Acesso válido
// echo $funcionario->salario; // Acesso inválido (protegido)
// echo $funcionario->senha; // Acesso inválido (privado)

?>
