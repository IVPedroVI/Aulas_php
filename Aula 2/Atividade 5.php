<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $a = 1;
        $b = 1;
        $c = "Léo";
        $d = "Léo";

        //Igual: ==
        $a == $b; //Esta expressão retorna TRUE

        //Idêntico: ===
        $a === $b; //Esta expressão retorna FALSE

        //Diferente: !=
        $a != $c; //Esta expressão retorna TRUE

        //Menor que: <
        $a < $b; //Esta expressão retorna FALSE

        //Maior que: >
        $a > $b; //Esta expressão retorna FALSE

        //Menor ou igual: <=
        $a <= $b; //Esta expressão retorna TRUE

        //Maior ou igual: >=
        $a >= $b; //Esta expressão retorna TRUE
    ?>
</body>
</html>