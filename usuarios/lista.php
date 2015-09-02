<?php

// Iniciar sessão
session_start();
$usuarios = $_SESSION['usuarios'];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Usuários</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <h1>Cadastro de Usuários</h1>
            </div>
            <a href="formulario.php" class="btn btn-primary">Novo</a>
            <hr>
            <table class="table table-stripped table-hover">
                <thead>
                    <tr>
                        <th>CPF</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $usuarios as $usuario ) : ?>
                    <tr>
                        <td><?php echo $usuario['cpf'] ?></td>
                        <td><?php echo $usuario['nome'] ?></td>
                        <td><?php echo $usuario['email'] ?></td>
                        <td>
                            <button class="btn btn-primary">Editar</button>
                            <button class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>