<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $idade = 18;
    if ($idade > 18) {
        echo "Você é o maior idade";
    } elseif ($idade == 18) {
        echo "Você acaba de atingir a maioridade";
    } else {
        echo "Você é menor de idade";
    }
    ?>
</body>
</html>