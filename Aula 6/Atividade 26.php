<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Conta {
    public $saldo = 0;

    function depositar($valor) {
        $this->saldo += $valor;
    }

    function sacar($valor) {
        $this->saldo -= $valor;
    }
}

class ContaCorrente extends Conta {
    function transferir($contaDestino, $valor) {
        $this->saldo -= $valor;
    }
}

$novaConta1 = new ContaCorrente();
$novaConta2 = new ContaCorrente();

$novaConta1->transferir('xxx-xxx', 500);
$novaConta2->depositar(500);

echo "Saldo: " . $novaConta1->saldo . "\n";
echo "Saldo: " . $novaConta2->saldo . "\n";
?>
</body>
</html>