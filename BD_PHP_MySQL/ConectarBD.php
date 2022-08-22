<?php
$servername = "localhost";
$username = "root";
$password = "";
$nomeBD = "bd_teste_php";

// Criar conexão
$bdConection = new mysqli($servername, $username, $password, $nomeBD);

// Checar conexão
if ($bdConection->connect_error) {
  die("Erro na conexão: " . $bdConection->connect_error);
}



function pesquisarTodosDadosTabela(string $tabela, $conexaoBD) {
    $query = "SELECT * FROM $tabela";
    $dadosTabela = $conexaoBD->query($query);

    return $dadosTabela;
}