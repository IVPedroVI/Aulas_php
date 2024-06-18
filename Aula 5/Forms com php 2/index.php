<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <h1>Formulário de Cadastro</h1>
    <form id="formCadastro" name="formCadastro" method="POST" action="receberForm.php">

        <p><b>Qual seu sistema operacional?</b></p>
        <input type="radio" name="sistema" value="Windows 8.1 Win 98"> Windows 8.1/Win 98<br>
        <input type="radio" name="sistema" value="Windows 10 Win XP"> Windows 10/Win XP<br>
        <input type="radio" name="sistema" value="Linux"> Linux<br>
        <input type="radio" name="sistema" value="Mac"> Mac<br><br>

        <p><b>Escolha os números de sua preferência:</b></p>
        <input type="checkbox" name="numeros[]" value="10"> 10<br>
        <input type="checkbox" name="numeros[]" value="100"> 100<br>
        <input type="checkbox" name="numeros[]" value="1000"> 1000<br><br>

        <p><b>Qual seu processador?</b></p>
        <select name="processador">
            <option value="Pentium">Pentium</option>
            <option value="AMD">AMD</option>
            <option value="Celeron">Celeron</option>
        </select><br><br>

        <input id="botaoEnviar" type="submit" value="Enviar">
    </form>
</body>
</html>
