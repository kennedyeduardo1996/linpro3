<?php

// Desativar os erros do tipo NOTICE
error_reporting( E_ALL ^ E_NOTICE );

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