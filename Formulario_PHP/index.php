<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./index.css">
  <title>Formulário lista de empregados</title>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <form class="Formulario" method="post">
    <label for="nome">Nome do funcionário:</label>
      <input 
        type="text" 
        id='nome'
        name="nome" 
      />
    <label for="idade">Idade:</label>
      <input 
        type="number" 
        id='idade'
        name="idade"
      />
    <label for="nacionalidade">Nacionalidade:</label>
      <input 
        type="text" 
        id='nacionalidade'
        name="nacionalidade" 
      />
    <label for="posicao">Posição:</label>
      <input 
        type="text" 
        id='posicao'
        name="posicao" 
      />
    <label for="salario">Valor do salário (mês):</label>
      <input 
        type="number" 
        id='salario'
        name="salario"
      />
    <input 
      type='submit' 
      value="Submit">
    </input>
  </form>
  <hr>
  <div class="container">
    <div class="row">
      <?= $_POST["nome"] ?>
    </div>
  </div>
  


</body>
</html>