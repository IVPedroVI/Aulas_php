<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $a = 1; // A variável $a é igual a 1
        $a += 2; // Somamos 2 ao valor $a
        echo $a;
    ?>

    <?php 
        $a -= 2; // Subtraimos 2 ao valor da variavel $a
        $a *= 2; // Subtraimos o valor da variavel $a por 2
        $a /= 2; // Dividimos o valor da variavel $a por 2
    ?>


    <?php 
        $a = 1; 
        echo ++$a; // Incrementamos 1 e retornamos 
        echo $a++; // Retornamos o valor e incrementamos 1
        echo --$a; // Decrementamos 1 e retornamos o valor 
        echo $a--; // Retornamos o valor e decrementamos 1
    ?>



</body>
</html>