<?php
$usuario_correto = "Professor";
$senha_correta = "DEVISATE";


$data = date("d/m/Y");
$hora = date("H:i:s");


if (isset($_POST["botao"])) {
    $nome = $_POST["usuario"];
    $senha = $_POST["senha"];


    if ($nome === $usuario_correto && $senha === $senha_correta) {
        echo "Acesso liberado em $data às $hora!";
    } else {
        echo "Acesso negado!";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <label>Usuário:</label><br>
        <input type="text" name="usuario"><br>
       
        <label>Senha:</label><br>
        <input type="password" name="senha"><br>
       
        <button type="submit" name="botao">Enviar</button>
    </form>
</body>
</html>