<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

abstract class Conta
{
    public $saldo = 0;

    abstract function depositar($valor);

    abstract function sacar($valor);
}

class ContaCorrente extends Conta
{
    function depositar($valor)
    {
        $this->saldo += $valor;
    }

    function sacar($valor)
    {
        $this->saldo -= $valor;
    }

    function transferir(ContaCorrente $contaDestino, $valor)
    {
        $this->saldo -= $valor;
        $contaDestino->saldo += $valor;
    }
}

$novaConta1 = new ContaCorrente();
$novaConta2 = new ContaCorrente();

$novaConta1->transferir($novaConta2, 500);
$novaConta2->depositar(500);

echo "Saldo: " . $novaConta1->saldo . "<br>";
echo "Saldo: " . $novaConta2->saldo . "<br>";

?>

</body>
</html>
