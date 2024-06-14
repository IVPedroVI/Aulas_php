<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = 'Fulano';
        switch ($nome) {
            case 'Segunda':
                echo'E ai Fulano!';
                break;
            case 'Sicrano':
                echo'E ai Sicrano';
                break;
            case 'Beltrano':
                echo'E ai Beltrano';
                break;
            default:
                echo'Qual seu nome?';
                break;
        }
    ?>
</body>
</html>