<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = "Till Lindemann";

        if ($nome == "Richard Kruspe") {
            echo "E ae Richard Kruspe!";
        } elseif ($nome == "Oliver Riedel") {
            echo "E ae Oliver Riedel!";
        } elseif ($nome == "Till Lindemann") {
            echo "E ae Till Lindemann!";
        } else {
            echo "E ae $nome!";
        }
    ?>
</body>
</html>