<?php

// Desativar os erros do tipo NOTICE
error_reporting( E_ALL ^ E_NOTICE );

// Iniciar sessão
session_start();

// Pegar o usuário pelo CPF na sessão
$cpf = $_GET['cpf'];
$usuario = $_SESSION['usuarios'][$cpf];
        
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
            E-mail: <input type="email" name="email" value="<?php echo $usuario['email'] ?>"><br><br>
            Senha: <input type="password" name="senha" value="<?php echo $usuario['senha'] ?>"><br><br>
            CPF: <input type="text" name="cpf" value="<?php echo $usuario['cpf'] ?>" maxlength="11"><br><br>
            Nome: <input type="text" name="nome" value="<?php echo $usuario['nome'] ?>"><br><br>
            CEP: <input type="text" name="cep" value="<?php echo $usuario['cep'] ?>"><br><br>
            Endereço: <input type="text" name="endereco" value="<?php echo $usuario['endereco'] ?>"><br><br>
            Número: <input type="text" name="numero" value="<?php echo $usuario['numero'] ?>"><br><br>
            Bairro: <input type="text" name="bairro" value="<?php echo $usuario['bairro'] ?>"><br><br>
            Cidade: <input type="text" name="cidade" value="<?php echo $usuario['cidade'] ?>"><br><br>
            UF: <input type="text" name="uf" value="<?php echo $usuario['uf'] ?>"><br><br>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>