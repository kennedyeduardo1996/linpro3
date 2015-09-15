<?php

// Desativar os erros do tipo NOTICE
error_reporting( E_ALL ^ E_NOTICE );

class UsuarioProcessaSessao {
    
    public function __construct() {
//        $_GET['acao'] esse que eh um metodo
//        se o metodo existe ( nessa class, esse metodo)
        if ( method_exists( $this, $_GET['acao'] ) )
//                executar o metodo que esta no paramento "acao" (comecar com array(nessa class, esta ação))
            call_user_func ( array($this, $_GET['acao']) );
        else
//            die é para finalizar aki com essa mensagem
            die( "A ação <b>{$_GET['acao']}</b> não existe!" );
    }
    
    // Salvar usuários
//    action="processa.php?acao=salvar" foi passado 
//    ou seja acao = salvar
    public function salvar() {
        // Armazenar usuario na variável
        $usuario = $_POST;

        // Validar os dados
        $cpf = $usuario['cpf'];

        if ( strlen($cpf) != 11 || ! is_numeric($cpf) )
            die( 'Digite um CPF válido' );

        // Iniciar a sessão
        session_start();
//        a sessão e um array que esta armazenando o espaço cpf
        $_SESSION['usuarios'][$cpf] = $usuario;
        
        // Redirecionar para a página lista.php
        header( 'Location: lista.php' );
    }
    
    // Excluir usuários
    public function excluir() {
        // Iniciar a sessão
        session_start();
        
        // Remover usuário pelo cpf
        $cpf = $_GET['cpf'];
        unset( $_SESSION['usuarios'][$cpf] );
        
        // Redirecionar para a página lista.php
        header( 'Location: lista.php' );
    }
    
}
new UsuarioProcessa();