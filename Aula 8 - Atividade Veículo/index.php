<?php
require_once 'Carro.php';
require_once 'Moto.php';

$carro = new Carro("Aston Martin", "Vantage", 2022);
echo "<h2>Detalhes do Carro:</h2>";
$carro->exibirDetalhes();
$carro->acelerar();
echo "<br>";

// Instanciando uma moto
$moto = new Moto("Yamaha", "Factor 150 ED UBS", 2023);
echo "<h2>Detalhes da Moto:</h2>";
$moto->exibirDetalhes();
$moto->acelerar();
?>
