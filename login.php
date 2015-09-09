<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página de Formulário</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form action="processa_login.php" method="post">
            Usuário: <input type="text" name="usuario" id="usuario">
            <br>
            Senha: <input type="text" name="senha" id="senha">
            <br>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>