<?php

// Desativar os erros do tipo NOTICE
error_reporting( E_ALL ^ E_NOTICE );

// Iniciar sessão
session_start();

// Pegar o usuário pelo CPF na sessão
$cpf = $_GET['cpf'];
$usuario = $_SESSION['usuarios'][$cpf];
        
print_r($usuario);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Usuários</title>
    </head>
    <body>
        <h1>Cadastro de Usuários</h1>
        <form action="processa.php?acao=salvar" method="post">
            E-mail: <input type="email" name="email" value=""><br><br>
            Senha: <input type="password" name="senha" value="" ><br><br>
            CPF: <input type="text" name="cpf" value="" maxlength="11"><br><br>
            Nome: <input type="text" name="nome" value=""><br><br>
            CEP: <input type="text" name="cep" value=""><br><br>
            Endereço: <input type="text" name="endereco" value=""><br><br>
            Número: <input type="text" name="numero" value=""><br><br>
            Bairro: <input type="text" name="bairro" value=""><br><br>
            Cidade: <input type="text" name="cidade" value=""><br><br>
            UF: <input type="text" name="uf" value=""><br><br>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>