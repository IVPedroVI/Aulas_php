<?php 
require_once 'Funcionario.php';

//Cria uma instância da classe Funcionário
$funcionario = new Funcionario("Diego", 30, 5000);

//Exibe as informações do funcionário
$funcionario->exibirInformacoes();
?>