<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    // Radio Button
    echo "<b>Seu sistema operacional é: </b> " . $_POST["sistema"] . "<br><br>";

    // Checkbox
    if (isset($_POST["numeros"])) {
        echo "<b>Os números de sua preferência são:</b><BR>";

        // Faz loop pelo array dos números
        foreach ($_POST["numeros"] as $numero) {
            echo $numero . "<BR>";
        }
    } else {
        echo "<b>Você não escolheu número preferido!</b><br><br>";
    }

    // Campo de texto
    echo "<b>Seu processador é: </b>" . $_POST["processador"] . "<BR>";
?>

</body>
</html>