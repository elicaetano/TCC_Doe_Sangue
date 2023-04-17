<?php 

//Pegar infomações digitadas e usa-las para verificar se o usuário esta ou não cadastrado.
header("content-type: text/html; charset=utf8");
include "conexao.php";

$cpf=$_POST['cpf'];
$senha=$_POST['senha'];

//montar sql
$sql="SELECT * FROM doador WHERE cpf='$cpf' AND senha='$senha'";

//busca dados, variavel carregador
$carregador=mysqli_query($conn,$sql);

//divide os vetores de campo e joga em linha

if ($linha=mysqli_fetch_array($carregador))
{
	
	echo"<script>;
	window.location.href=#;</script>"; #redirecionamento para a pagina
	
}
else
{
	echo"<script>alert('usuário ou senha inválidos');
	window.location.href='navegacao.html';</script>";
}

?>
