<?php

// Desativar os erros do tipo NOTICE
error_reporting( E_ALL ^ E_NOTICE );

class UsuarioProcessa {
    
    public function __construct() {
        if ( method_exists( $this, $_GET['acao'] ) )
            call_user_func ( array($this, $_GET['acao']) );
        else
            die( "A ação <b>{$_GET['acao']}</b> não existe!" );
    }
    
    // Salvar usuários
    public function salvar() {
        // Armazenar usuario na variável
        $usuario = $_POST;

        // Validar os dados
        $cpf = $usuario['cpf'];

        if ( strlen($cpf) != 11 || ! is_numeric($cpf) )
            die( 'Digite um CPF válido' );

        // Iniciar a sessão
        session_start();
        $_SESSION['usuarios'][$cpf] = $usuario;
        
        // Redirecionar para a página lista.php
        header( 'Location: lista.php' );
    }
    
    // Excluir usuários
    public function excluir() {
        echo 'EXCLUIRRRRR!!!!!!!';
    }
    
}
new UsuarioProcessa();