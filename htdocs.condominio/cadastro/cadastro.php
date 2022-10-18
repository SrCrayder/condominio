<?php
// Puxa a conexão com o banco de dados
require($_SERVER['DOCUMENT_ROOT'] . '/servidor/config.php');
// Se o metodo post for ativado insira os seguintes dados do formulario
if($_SERVER['REQUEST_METHOD'] == "POST" ):

 $sql =  "INSERT INTO funcionarios (CPF, nome, tel, senha, email ) VALUES (

'$_POST[CPF]',
'$_POST[nome]',
'$_POST[tel]',
SHA1('$_POST[senha]'),
'$_POST[email]'
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
     <h1>Cadastro de funcionarios</h1>

     <form method="post" action="cadastro.php">
<label for="number">CPF:</label>
<input type="string" id="inputcpf" name="CPF" placeholder="Escreva seu CPF">

<label for="text">Nome:</label>
<input type="string" id="inputname" name="nome" placeholder="Escreva seu nome:">

<label for="Email">Email:</label>
<input type="email" id="inputemail" name="email" placeholder="Digite seu E-mail:">

<label for="number">Senha:</label>
<input type="password" id="inputpass" name="senha" placeholder="Digite sua senha:" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{7,25}$">

<label for="number">Telefone:</label>
<input type="string" id="inputtel" name="tel" placeholder="Digite seu telefone:">

<button class="btn btn-lg btn-danger btn-block" type="submit">Realizar Cadastro</button>












     </form>