<?php 

//Pegar infomações digitadas e usa-las para verificar se o usuário esta ou não cadastrado.
header("content-type: text/html; charset=utf8");
include "conexao.php";

$cnpj=$_POST['cnpj'];
$senha=$_POST['senha'];
//montar sql

$sql="SELECT * FROM hospital WHERE cnpj='$cnpj' AND senha='$senha'";

$carregador=mysqli_query($conn,$sql);
//divide os vetores de campo e joga em linha

if ($linha=mysqli_fetch_array($carregador))
{
	
	echo"<script>alert('Dados Confirmados');
	window.location.href='consultaPessoal.php';</script>";
	
}
else
{
	echo"<script>alert('usuário ou senha inválidos');
	window.location.href='navegacao.html';</script>";
}

?>