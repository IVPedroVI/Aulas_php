<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $contador = 1; 
        do { 
            echo "Contador está em: $contador<br>"; 
            $contador++;  
        } while ($contador <= 5);
    ?>
</body>
</html>