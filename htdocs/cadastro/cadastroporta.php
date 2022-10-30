<?php
// Puxa a conexão com o banco de dados
require($_SERVER['DOCUMENT_ROOT'] . '/servidor/config.php');
// Se o metodo post for ativado insira os seguintes dados do formulario
if($_SERVER['REQUEST_METHOD'] == "POST" ):

 $sql =  "INSERT INTO portaria (cpf, func, turno, correio) VALUES (

'$_POST[cpf]',
'$_POST[func]',
'$_POST[turno]',
'$_POST[correio]'
);";

$conn->query($sql);

echo 'Cadastro Realizado';

endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">   
     <title>Cadastro </title>
     <h1>Cadastro do Porteiro</h1>

     <form method="post" action="cadastroporta.php">
<label for="number">CPF:</label>
<input type="string" id="inputcpf" name="cpf" placeholder="Escreva seu CPF">
<br>
<label for="text">Funcionario:</label>
<input type="string" id="inputname" name="func" placeholder="Escreva seu nome:">
<br>
<label>Escolha seu turno</label>
<select name="turno" id="turno">  
  <option selected>Selecione</option>
  <option value="Manhã">Manhã</option>
  <option value="Tarde">Tarde</option>
  <option value="Noite">Noite</option>
</select>

<br>
<label for="number">Correio:</label>
<input type="text" id="inputpass" name="correio" placeholder="Digite as informações da incomenda:" size="40" textarea="40">

<button class="btn btn-lg btn-danger btn-block" type="submit">Realizar Cadastro</button>

     </form>