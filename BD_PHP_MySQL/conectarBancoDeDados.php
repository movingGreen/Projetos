<?php
$servername = "localhost";
$username = "root";
$password = "";
$nomeBD = "bd_teste_php";

// Create connection
$bdConection = new mysqli($servername, $username, $password, $nomeBD);

// Check connection
if ($bdConection->connect_error) {
  die("Erro na conexão: " . $bdConection->connect_error);
}
// echo "Connected successfully<br>";

// Criar banco de dados
// $sqlCriarBanco = "CREATE DATABASE bd_teste_php";
// if (mysqli_query($bdConection, $sqlCriarBanco)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " .mysqli_error($bdConection);
// }

// =====================================================

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

// =========================================
// POVOAMENTO DAS TABELAS

// $query = "
// INSERT INTO cliente (nome, sexo, cpf)
// VALUES 

// ('Plácido David',	'M',	'98363847111'),
// ('Pedrinho Wálter',	'M',	'98560861111'),
// ('Cezar Joel',	'M',	'48399422111'),
// ('Óscar Teobaldo',	'M',	'37683400111'),
// ('Valente Ademar',	'M',	'49360005111');";

// $query .= "
// INSERT INTO forma_pagto (ID_Forma_Pagto, Descricao)
// VALUES 
// (1, 'BOLETO'),
// (2, 'CRÉDITO'),
// (3, 'DÉBITO'),
// (4, 'DINHEIRO'),
// (5, 'VALE ALIMENTAÇÃO');";

// $query .= "
// INSERT INTO produto ( ID_Produto, VL_Unitario, Descricao, DT_Validade, DT_Fabricacao, Lote, QTD_Estoque, Marca)
// VALUES 
// (1, 15.20, 'produto A', '2023/12/04', '2021/05/02', 1022, 90, 'marca x'),
// (2, 100.00, 'produto B', '2024/11/08', '2020/09/12', 4123, 5, 'marca y'),
// (3, 86.26, 'produto C', '2022/10/24', '2021/10/05', 14327, 190, 'marca z'),
// (4, 5.10, 'produto D', '2025/07/19', '2021/11/14', 834, 385, 'marca xx'),
// (5, 17.30, 'produto E', '2022/12/26', '2021/08/30', 1256, 20, 'marca yy');";

// $query .= "
// INSERT INTO compra_produto (ID_Compra_Produto, QTD_Comprada, VL_Total_Item, ID_Produto)
// VALUES 
// (1, 100, 510, 4),
// (2, 1, 100, 2),
// (3, 10, 173, 5),
// (4, 15, 1293.9, 3),
// (5, 20, 102, 4),
// (6, 5, 500, 2),
// (7, 3, 45.60, 1),
// (8, 4, 300, 2),
// (9, 11, 190.3, 5),
// (10, 30, 153, 4),
// (11, 2, 10.20, 4),
// (12, 50, 865, 5),
// (13, 7, 603.82, 3),
// (14, 10, 1000, 2),
// (15, 2, 34.60, 5),
// (16, 1, 15.20, 1),
// (17, 18, 91.8, 4),
// (18, 15, 259.5, 5),
// (19, 12, 182.4, 1),
// (20, 6, 30.60, 4);";

// $query .= "
// INSERT INTO compra (ID_Compra, DT_Compra, VL_Total_Compra, Atendente, ID_Forma_Pagto, ID_Cliente, ID_Compra_Produto)
// VALUES 
// (1, '2022/10/10', 510.00, 'Atendente 1', 1, 1, 1),
// (2, '2022/05/11', 100.00, 'Atendente 2', 3, 2, 2),
// (3, '2022/03/12', 173.00, 'Atendente 3', 4, 3, 3),
// (4, '2022/07/13', 1293.90, 'Atendente 4', 5, 4, 4),
// (5, '2022/12/14', 102.00, 'Atendente 5', 2, 5, 5),
// (6, '2022/11/15', 500.00, 'Atendente 6', 1, 4, 6),
// (7, '2022/09/16', 45.60, 'Atendente 7', 4, 3, 7),
// (8, '2022/02/17', 300.00, 'Atendente 8', 5, 2, 8),
// (9, '2022/10/18', 190.30, 'Atendente 9', 2, 1, 9),
// (10, '2022/06/19', 153.00, 'Atendente 10', 3, 5, 10);";

// =========================================================
// Select nas tabelas

$query = "SELECT * FROM cliente";


// ==========================================================

// print_r($query);

// if ($bdConection->multi_query($query) === TRUE) {
//   echo "New records created successfully";
// } else {
//   echo "Error: " . $query . "<br>" . $bdConection->error;
// }



$respostaConexao = $bdConection->query($query);

if ($respostaConexao->num_rows > 0) {
  echo "Query realizada com sucesso"."<br>";
} else {
  echo "Erro na query: ";
}

// ============================================================= 
// Mostrar respostas

// if ($respostaConexao->num_rows > 0) {

//   // Mostrar respostas por linhas
//   while($linha = $respostaConexao->fetch_assoc()) {
//     echo "id: " . $linha["ID_Cliente"]. " - Nome: " . $linha["nome"]. " - Sexo: " . $linha["sexo"]. " - CPF: " . "<br>";
//   }

// } else {
//   echo "0 results";
// }

if ($respostaConexao->num_rows > 0) {
  $resultado = "
  <table>
    <tr>
      <th>Nome</th>
      <th>cpf</th>
    </tr>
  ";

  // Mostrar respostas por linhas
  while($linha = $respostaConexao->fetch_assoc()) {
    $resultado .= "
    <tr>
      <td>${linha['nome']}</td>
      <td>${linha['cpf']}</td>
    </tr>
    ";
  }
  $resultado .= "</table>";

} else {
  echo "0 results";
}
echo $resultado;


// =====================================================
var_dump($bdConection);

mysqli_close($bdConection);

// =======================================
// Apresentar na tela