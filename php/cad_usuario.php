<?php
//Recendo os dados do formulario
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmarSenha = $_POST['confirmarSenha'];
$celular = $_POST['celular'];
$setor = $_POST['setor'];

//incluir o arquivo de conexão
include 'conexao.php';

//instrução sql para inserir os dados
$insert = "INSERT INTO tb_usuario(null, '$nome', '$email ', '$senha','$celular','$setor')";




?>