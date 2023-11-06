<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'sistema-cadastro';

// Conexão com o banco de dados
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Função para verificar a força da senha
function verificarForcaSenha($senha) {
    if (strlen($senha) < 8) {
        return false;
    }

    if (!preg_match("[A-Z]", $senha) || !preg_match("[a-z]", $senha)) {
        return false;
    }

    if (!preg_match("[0-9]", $senha)) {
        return false;
    }

    if (ctype_alnum($senha)) {
        return false;
    }

    return true;
}
?>
