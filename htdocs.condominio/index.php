<?php
// Puxa a conexão com o banco de dados
require($_SERVER['DOCUMENT_ROOT'] . '/servidor/config.php');
// aqui deixei o espaço para aquela ideia de atribuir os cpf's e senhas nas variaveis caso queira 
//tentar utilizar.
$cpf = "";

$senha = "";

// Se o metodo post for ativado busca os dados no banco de dados
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $query = <<<SQL
SELECT * FROM funcionarios WHERE CPF = '{$cpf}' AND senha = SHA1('{$senha}');
SQL;

    $res = $conn->query($query);

    $row = mysqli_num_rows($res);

    echo $row;
}


$content = <<<HTML
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
     <title>login</title>
</head>
<body>
    
  <form action="action_page.php">
    <div class="container">
      <h1>Condomínio Belas Artes</h1>
      <p>Faça o login</p>
      <hr>
      <form>
  <div class="form-group">
    <label for="exampleInputEmail1">CPF</label>
    <input type="email" class="form-control" id="exampleInputCpf" aria-describedby="emailHelp" placeholder="EDigite o CPF" name = "CPF">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name = "senha">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Logar!</button>
</form>

HTML;

echo $content;
?>
