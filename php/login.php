<?php
//recebendo os dados do formularios
$email = $_POST['email'];
$senha = $_POST['senha'];

//incluir o arquivo de conexão para puxar a conexão da variavel $conexao

include 'conexao.php';

//colocar a instrução select dentro da variavel $select

$select = "SELECT * FROM tb_usuario WHERE email = '$email'";

//executar a instrução sql com a função query()

$query = $conexao->query($select);

//Pegar o primeiro registro do select e armazenar na variavel $resultado

$resultado = $query->fetch_assoc();

$email_banco = $resultado ['email'];
$senha_banco = $resultado ['senha'];





?>