<?php
include "ConectarBD.php";

$dadosCliente =  PesquisarTodosDadosTabela("cliente", $conexaoBD);
$dadosProduto =  PesquisarTodosDadosTabela("produto", $conexaoBD);
$dadosFormaPagto =  PesquisarTodosDadosTabela("forma_pagto", $conexaoBD);

$queryCompraProd = "
  SELECT compra_produto.ID_Compra_Produto, compra_produto.QTD_Comprada, compra_produto.VL_Total_Item, produto.Descricao
  FROM compra_produto
  INNER JOIN produto ON compra_produto.ID_Produto = produto.Descricao
";
$dadosCompraProd =  $conexaoBD->query($queryCompraProd);

$queryCompra = "";
$dadosCompra =  $conexaoBD->query($queryCompra);

function TabularDados($respostaQuery){
  if ($respostaQuery->num_rows > 0) {
    $resultado = "";

    // Mostrar respostas por linhas
    while($linha = $respostaQuery->fetch_assoc()) {
      $resultado .= "<tr>";

      foreach (array_values($linha) as $valor) {
        $resultado .= "
          <td>${valor}</td>
        ";
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
                <th>nome</th>
                <th>sexo</th>
                <th>cpf</th>
              </tr>
            </thead>
            <tbody>
              <?php
                echo TabularDados($dadosCliente);
              ?>
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
                <th>QTD em Estoque</th>
                <th>Marca</th>
              </tr>
            </thead>
            <tbody>
              <?php
                if ($dadosProduto->num_rows > 0) {
                  $resultado = "";

                  while($linha = $dadosProduto->fetch_assoc()) {
                    $resultado .= "
                      <tr>
                        <td>${linha['ID_Produto']}</td>
                        <td>${linha['VL_Unitario']}</td>
                        <td>${linha['Descricao']}</td>
                        <td>${linha['DT_Validade']}</td>
                        <td>${linha['DT_Fabricacao']}</td>
                        <td>${linha['Lote']}</td>
                        <td>${linha['QTD_Estoque']}</td>
                        <td>${linha['Marca']}</td>
                      </tr>
                    ";
                  }
                } else {
                  $resultado = "
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  ";
                }
                echo $resultado;
              ?>
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
              <?php
                if ($dadosFormaPagto->num_rows > 0) {
                  $resultado = "";

                  while ($linha = $dadosFormaPagto->fetch_assoc()) {
                    $resultado .= "
                      <tr>
                        <td>${linha['ID_Forma_Pagto']}</td>
                        <td>${linha['Descricao']}</td>
                      </tr>
                    ";
                  }
                } else {
                  $resultado = "
                    <tr>
                      <td></td>
                      <td></td>
                    </tr>
                  ";
                }
                echo $resultado;
              ?>
            </tbody>
          </table>
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-center">Tabela Compra Produto</h4>
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
              <tr>
                <td scope="row"></td>
                <td></td>
              </tr>
              <tr>
                <td scope="row"></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-center">Tabela Compra</h4>
          <table class="table table-striped table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>Data da Compra</th>
                <th>Valor Total</th>
                <th>Atendente</th>
                <th>ID Pagamento</th>
                <th>ID Cliente</th>
                <th>ID Compra Prod.</th>
              </tr>
            </thead>
            <tbody>
              <?php
                if ($dadosCompra->num_rows > 0) {
                  $resultado = "";

                  // Mostrar respostas por linhas
                  while($linha = $dadosCompra->fetch_assoc()) {
                    $resultado .= "
                      <tr>
                        <td>${linha['ID_Compra']}</td>
                        <td>${linha['DT_Compra']}</td>
                        <td>${linha['VL_Total_Compra']}</td>
                        <td>${linha['Atendente']}</td>
                        <td>${linha['ID_Forma_Pagto']}</td>
                        <td>${linha['ID_Cliente']}</td>
                        <td>${linha['ID_Compra_Produto']}</td>
                      </tr>
                    ";
                  }
                } else {
                  $resultado = "
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  ";
                }
                echo $resultado;
              ?>
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
            <thead>
              <tr>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
          <br>
          <br>
          <h5 class="">Produtos ordenados por mais comprados</h5>
            <table class="table table-striped table-success">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row"></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td scope="row"></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
        </div>
      </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
