<?php 
header("content-type:text/html;charset=utf8");

include "conexao.php";

$nome_resposavel_cadastro=$_POST['nome_resposavel_cadastro'];
$nome_diretor=$_POST['nome_diretor'];
$cnpj=$_POST['cnpj'];
$telefone=$_POST['telefone'];
$nome_hospital=$_POST['nome_hospital'];
$rua=$_POST['rua'];
$bairro=$_POST['bairro'];
$cep=$_POST['cep'];
$cidade=$_POST['cidade'];
$uf=$_POST['uf'];
$senha = $_POST['senha'];

$sql="INSERT INTO hospital (nome_resposavel_cadastro, nome_diretor,cnpj,telefone,nome_hospital,rua,bairro,cep,cidade,uf,senha) VALUES ('$nome_resposavel_cadastro', '$nome_diretor','$cnpj','$telefone','$nome_hospital','$rua', '$bairro', '$cep', '$cidade', '$uf',$senha)";

mysqli_query($conn,$sql);

mysqli_close($conn);

 ?>

<script>

	alert(" Registro armazenado com sucesso");
	window.location.href='navegacao.html'; </script>";

 </script>