<?php 
require_once 'Pessoa.php';
class Funcionario extends Pessoa {
    //Propiedade específica da classe Funcionário
    private $salario;
    //Construtor da classe Funcionário
    public function __construct($nome, $idade, $salario) {
    //Chama o construtor da classe pai
    parent::__construct($nome, $idade);
    $this->salario = $salario;
    }
    //Método para exibir informações do Funcionário
    public function exibirInformacoes() {
    //Chama o método exibirInformacoes da classe pai
    parent::exibirInformacoes();
    echo "Salário: " .$this->salario . "<br>";    
    }

}

?>