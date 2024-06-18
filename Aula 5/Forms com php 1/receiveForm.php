<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Processamento do Formulário</title>
</head>
<body>
    <?php
    // Verifica se os campos foram enviados via POST antes de tentar acessá-los
    if (isset($_POST["campo1"])) {
        echo "O valor do CAMPO 1 é: " . $_POST["campo1"];
    } else {
        echo "Campo 1 não foi enviado via POST.";
    }

    echo "<br>";

    if (isset($_POST["campo2"])) {
        echo "O valor do CAMPO 2 é: " . $_POST["campo2"];
    } else {
        echo "Campo 2 não foi enviado via POST.";
    }
    ?>
</body>
</html>
