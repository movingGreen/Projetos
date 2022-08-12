<?php
$servername = "localhost";
$username = "root";
$password = "";
$nomeBD = "bd_teste_php";

// Create connection
$bdConection = mysqli_connect($servername, $username, $password, $nomeBD);

// Check connection
if (!$bdConection) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

var_dump($bdConection);

// Criar banco de dados
// $sqlCriarBanco = "CREATE DATABASE bd_teste_php";
// if (mysqli_query($bdConection, $sqlCriarBanco)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " .mysqli_error($bdConection);
// }

// CRIAR TABELA
// $sqlCriarTabelaCliente = "CREATE TABLE CLIENTE (
//   ID_Cliente INTEGER AUTO_INCREMENT PRIMARY KEY,
//   nome VARCHAR(50) NOT NULL,
//   sexo CHAR(1) NOT NULL,
//   cpf CHAR(11) NOT NULL
//   )";

$query = "EXPLAIN cliente";

if (mysqli_query($bdConection, $query)) {
  echo "Query realizada com sucesso";
} else {
  echo "Erro na query: " . mysqli_error($bdConection);
}

var_dump($bdConection);

mysqli_close($bdConection);
?> 