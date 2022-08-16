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
echo "Connected successfully<br>";

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

// $query = "CREATE TABLE PRODUTO (
//   ID_Produto INTEGER PRIMARY KEY,
//   VL_Unitario NUMERIC(5,2),
//   Descricao VARCHAR(50),
//   DT_Validade DATE,
//   DT_Fabricacao DATE,
//   Lote INTEGER,
//   QTD_Estoque INTEGER,
//   Marca VARCHAR(30)
//   )";

// $query = "CREATE TABLE FORMA_PAGTO (
//   ID_Forma_Pagto INTEGER PRIMARY KEY,
//   Descricao VARCHAR(30)
//   )";
// $query = "CREATE TABLE COMPRA_PRODUTO (
//   ID_Compra_Produto INTEGER PRIMARY KEY,
//   QTD_Comprada INTEGER,
//   VL_Total_Item NUMERIC(7,2),
//   ID_Produto INTEGER,
//   FOREIGN KEY(ID_Produto) REFERENCES PRODUTO (ID_Produto)
//   )";
// $query = "CREATE TABLE COMPRA (
//   ID_Compra INTEGER PRIMARY KEY,
//   DT_Compra DATE,
//   VL_Total_Compra NUMERIC(7,2),
//   Atendente VARCHAR(50),
//   ID_Forma_Pagto INTEGER,
//   ID_Cliente INTEGER,
//   ID_Compra_Produto INTEGER,
//   FOREIGN KEY(ID_Cliente) REFERENCES CLIENTE (ID_Cliente),
//   FOREIGN KEY(ID_Forma_Pagto) REFERENCES FORMA_PAGTO (ID_Forma_Pagto),
//   FOREIGN KEY(ID_Compra_Produto) REFERENCES COMPRA_PRODUTO (ID_Compra_Produto)
//   )";

$query = "EXPLAIN cliente";

$respostaConexao = mysqli_query($bdConection, $query);

if ($respostaConexao) {
  echo "Query realizada com sucesso"."<br>";
} else {
  echo "Erro na query: " . mysqli_error($bdConection);
}

if (mysqli_num_rows($respostaConexao) > 0) {
  print_r($respostaConexao);
  
  
  // output data of each row
  // while($row = mysqli_fetch_assoc($respostaConexao)) {
  //   foreach($row as $chave => $valor) {
  //     echo $chave."==========".$valor."<br>";
  //   }
  // }
} else {
  echo "0 results";
}


mysqli_close($bdConection);
?> 