<?php
$servername = "localhost";
$username = "root";
$password = "";
$nomeBD = "bd_teste_php";

// Criar conexão
$conexaoBD = new mysqli($servername, $username, $password, $nomeBD);

// Checar conexão
if ($conexaoBD->connect_error) {
  die("Erro na conexão: " . $conexaoBD->connect_error);
}

function PesquisarTodosDadosTabela(string $tabela, $conexaoBD) {
    $tabela = strtolower($tabela);
    $query = "SELECT * FROM $tabela";
    $dadosTabela = $conexaoBD->query($query);

    return $dadosTabela;
}