<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página de Formulário</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <h1>Formulário de Login</h1>
            </div>
            <form action="processa_login.php" method="post">
                <div>
                    <label for="usuario">Usuário:</label>
                    <input type="text" class="form-control" name="usuario" id="usuario">
                </div>
                <div>
                    <label for="senha">Senha:</label>
                    <input type="text" class="form-control" name="senha" id="senha">
                </div>
                <br>
                <p>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </p>
            </form>
        </div>
    </body>
</html>