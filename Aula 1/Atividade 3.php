<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //Iniciar variavel
    $produtos = [
        "Maça" => 1.99,
        "Banana" => 2.99,
        "Laranja" => 1.99,
        "Tomate" => 2.99,
    ];

    //Exibir resultado
    echo "Lista de produtos: ";
    foreach ($produtos as $produtos => $preco) {
        echo "$produtos custa R$ $preco. ";
    }
    ?>
</body>
</html>