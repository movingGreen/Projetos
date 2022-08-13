<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./index.css">
  <title>Formulário lista de empregados</title>
</head>

<body>
  <form class="Formulario container" method="post">
    <div class="row">
      <label class="" for="nome">Nome do funcionário:</label>
      <input class="" type="text" id='nome' name="nome" />
    </div>
    <div class="row">
      <label class="" for="idade">Idade:</label>
      <input class="" type="number" id='idade' name="idade" />
    </div>
    <div class="row">
      <label class="" for="nacionalidade">Nacionalidade:</label>
      <input class="" type="text" id='nacionalidade' name="nacionalidade" />
    </div>
    <div class="row">
      <label class="" for="posicao">Posição:</label>
      <input class="" type="text" id="posicao" name="posicao" />
    </div>
    <div class="row">
      <label class="" for="salario">Valor do salário:</label>
      <input class="" type="number" id='salario' name="salario" />
    </div>
    <button type='submit'>Salvar</button>
  </form>
  <hr>
  <div class="container">
    <?php
      function testar_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      
      $nome = $idade = $nacionalidade = $posicao = $salario = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = testar_input($_POST["nome"]);
        $idade = testar_input($_POST["idade"]);
        $nacionalidade = testar_input($_POST["nacionalidade"]);
        $posicao = testar_input($_POST["posicao"]);
        $salario = testar_input($_POST["salario"]);
      }

      echo "$nome.<br />";
      echo "$idade.<br />";
      echo "$nacionalidade.<br />";
      echo "$posicao.<br />";
      echo "$salario.<br />"
  ?>
  </div>



</body>

</html>