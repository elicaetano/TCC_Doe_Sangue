<?php 
header("content-type:text/html;charset=utf8");

include "conexao.php";

$nome=$_POST['nome'];
$nacionalidade=$_POST['nacionalidade'];
$cpf=$_POST['cpf'];
$telefone=$_POST['telefone'];
$sangue=$_POST['sangue'];
$raca=$_POST['raca'];
$rua=$_POST['rua'];
$bairro=$_POST['bairro'];
$cep=$_POST['cep'];
$cidade=$_POST['cidade'];
$uf=$_POST['uf'];
$senha = $_POST['senha'];

$sql="INSERT INTO doador (Nome, Nacionalidade,CPF,Telefone,Grupo_sanguineo,Raca,Rua,bairro,cep,cidade,uf,senha) VALUES ('$nome', '$nacionalidade','$cpf','$telefone','$sangue','$raca','$rua', '$bairro', '$cep', '$cidade', '$uf','$senha')";

mysqli_query($conn,$sql);

mysqli_close($conn); #fecha a conexao

 ?>

<script>

	alert(" Registro armazenado com sucesso");
	window.location.href='navegacao.html'; </script>";

 </script>