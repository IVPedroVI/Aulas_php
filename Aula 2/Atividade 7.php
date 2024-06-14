<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //Array com chave => valor
        $listaAlunoIdade = array(
            "Leonardo" => 31,
            "Gabriella" => 27,
            "Bianca" => 07
        );

        //Array apenas com valor 
        $listaCores = array(
            "Vermelho",
            "Amarelo",
            "Verde",
            "Laranja"
        );

        //Acesso ao item do array $listaAlunoIdade [CHAVE]
        echo $listaAlunoIdade ["Leonardo"];    
        
        echo "<br/>";

        echo $listaCores [2];

        echo "<br/>";
        
        //Exibir em tela todo o conteúdo (chave e valor) de um array var_dump (array)
        var_dump($listaAlunoIdade);

        echo "<br/>";

        var_dump($listaCores);
        
        
        ?>
</body>
</html>