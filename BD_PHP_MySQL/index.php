<?php
include "ConectarBD.php";

$dadosCliente = PesquisarTodosDadosTabela("cliente", $conexaoBD);
$dadosProduto = PesquisarTodosDadosTabela("produto", $conexaoBD);
$dadosFormaPagto = PesquisarTodosDadosTabela("forma_pagto", $conexaoBD);

$queryCompraProd = "
  SELECT
    compra_produto.ID_Compra_Produto, compra_produto.QTD_Comprada, compra_produto.VL_Total_Item, produto.Descricao
  FROM
    compra_produto
    INNER JOIN produto ON compra_produto.ID_Produto = produto.ID_Produto;
";
$dadosCompraProd = $conexaoBD->query($queryCompraProd);

$queryCompra = "
  SELECT
    compra.ID_Compra, compra.DT_Compra, compra.VL_Total_Compra, compra.Atendente,
    forma_pagto.Descricao AS 'Forma de Pagamento', cliente.nome, produto.Descricao
  FROM
    compra, cliente, forma_pagto, compra_produto, produto
  WHERE
    compra.ID_Forma_Pagto = forma_pagto.ID_Forma_Pagto
    AND compra.ID_Cliente = cliente.ID_Cliente
    AND compra.ID_Compra_Produto = compra_produto.ID_Compra_Produto
    AND compra_produto.ID_Produto = produto.ID_Produto;
";
$dadosCompra = $conexaoBD->query($queryCompra);

$queryConsulta1 = "
  SELECT
    cliente.nome AS Nome, compra.ID_Compra AS 'ID da Compra',
    compra.DT_Compra AS 'Data da Compra', compra.VL_Total_Compra AS 'Valor Total da Compra'
  FROM compra
    INNER JOIN cliente ON compra.ID_Cliente = cliente.ID_Cliente;
";
$dadosConsulta1 = $conexaoBD->query($queryConsulta1);

$queryConsulta2 = "
  SELECT
    produto.Descricao AS 'Nome do Produto', COUNT(compra_produto.ID_Compra_Produto) AS 'Quantidade de Compras'
  FROM produto
    INNER JOIN compra_produto ON compra_produto.ID_Produto = produto.ID_Produto
  GROUP BY produto.Descricao
  ORDER BY COUNT(compra_produto.ID_Compra_Produto) DESC;
";
$dadosConsulta2 = $conexaoBD->query($queryConsulta2);

function TabularDados($respostaQuery){
  if ($respostaQuery->num_rows > 0) {
    $resultado = "";

    // Mostrar respostas por linhas
    while($linha = $respostaQuery->fetch_assoc()) {
      $resultado .= "<tr>";

      foreach (array_values($linha) as $valor) {
        $resultado .= "<td>${valor}</td>";
      }

      $resultado .= "</tr>";
    }
  } else {
    $resultado = "
      <tr>
        <td></td>
      </tr>
    ";
  }
  return $resultado;
}

function TabularDadosComHeader($respostaQuery){
  if ($respostaQuery->num_rows > 0) {
    $resultado = "
      <thead>
        <tr>
    ";
    $colunas = array_keys( $respostaQuery->fetch_assoc() );

    // Mostrar colunas da resposta
    foreach ($colunas as $header) {
      $resultado .= "<th>${header}</th>";
    }

    $resultado .= "
        </tr>
      </thead>
      <tbody>
    ";

    // Mostrar respostas por linhas
    while($linha = $respostaQuery->fetch_assoc()) {
      $resultado .= "<tr>";

      foreach (array_values($linha) as $valor) {
        $resultado .= "<td>${valor}</td>";
      }

      $resultado .= "</tr>";
    }

    $resultado .= "</tbody>";
  } else {
    $resultado = "
    <thead>
      <tr></tr>
    </thead>
    <tbody>
      <tr></tr>
    </tbody>
    ";
  }

  return $resultado;
}
?>

<!doctype html>
<html lang="pt">
  <head>
    <title>Dados do BD</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 class="text-center">Apresentação do Banco de Dados <br> Cliente_Produtos</h1>
      <br>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-center">Tabela Cliente</h4>
          <table class="table table-striped table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sexo</th>
                <th>CPF</th>
              </tr>
            </thead>
            <tbody>
              <?= TabularDados($dadosCliente); ?>
            </tbody>
          </table>
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-center">Tabela Produto</h4>
          <table class="table table-striped table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>Valor Unitário</th>
                <th>Descrição</th>
                <th>Data de Validade</th>
                <th>Data de Fabricação</th>
                <th>Lote</th>
                <th>Quantidade em Estoque</th>
                <th>Marca</th>
              </tr>
            </thead>
            <tbody>
              <?= TabularDados($dadosProduto); ?>
            </tbody>
          </table>
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-center">Tabela Forma de Pagamento</h4>
          <table class="table table-striped table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>Descrição</th>
              </tr>
            </thead>
            <tbody>
              <?= TabularDados($dadosFormaPagto); ?>
            </tbody>
          </table>
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-center">Tabela Compra Produto + Nome do Produto</h4>
          <table class="table table-striped table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>Quantidade</th>
                <th>Valor Total</th>
                <th>Nome Produto</th>
              </tr>
            </thead>
            <tbody>
              <?= TabularDados($dadosCompraProd); ?>
            </tbody>
          </table>
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-center">Tabela Compra + Dados da Compra</h4>
          <table class="table table-striped table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>Data da Compra</th>
                <th>Valor Total</th>
                <th>Atendente</th>
                <th>Forma de Pagamento</th>
                <th>Nome do Cliente</th>
                <th>Produto Comprado</th>
              </tr>
            </thead>
            <tbody>
              <?= TabularDados($dadosCompra); ?>
            </tbody>
          </table>
        </div>
      </div>
      <br>
      <div class="card ">
        <div class="card-body">
          <h4 class="card-title text-center">Pesquisas </h4>
          <h5 class="">Compras feitas por cada Cliente</h5>
          <table class="table table-striped table-success">
            <?= TabularDadosComHeader($dadosConsulta1); ?>
          </table>
          <br>
          <br>
          <h5 class="">Produtos ordenados por mais comprados</h5>
            <table class="table table-striped table-success">
              <?= TabularDadosComHeader($dadosConsulta2); ?>
            </table>
        </div>
      </div>
      <br>
      <h3 class="text-center">DER Conceitual</h3>
      <img src="Imagens/CONCEITUAL_Compra_Produto.jpg" class="img-fluid " alt="DER Conceitual da tabela Compra Produto">
      <br>
      <h3 class="text-center">DER Logico</h3>
      <img src="Imagens/LOGICO_Compra_Produto.jpg" class="img-fluid" alt="DER Logico Tabela Compra Produto">
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
