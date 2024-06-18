<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $temp = array('Outubro' => 27, 'Novembro' => 28, 'Dezembro' => 19);
    
        foreach ($temp as $chave => $valor) {
            echo "A temperatura média de $chave foi de $valor graus <br/> ";
        }
    ?>
</body>
</html>