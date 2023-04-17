<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">

<?php 

header("content-type:text/html;charset=utf8");
#include 'navegacao.html';
require 'conexao.php';
#include 'Principal.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
<script src="https://kit.fontawesome.com/db3a9100e9.js"></script>
<div class="centroVerificaDoador">
	<header class="cabelhoDoencaSangue">
			<div class="logoDoencaSangue">
				<a href="principal.html"><img src="assets/image/logo.png"></a>
			</div>	
			
			<div class="hemocentroLinks">
			     <nav class="nav nav-pills nav-fill">
					  <a style="color:black;" class="nav-item nav-link " href="hemocentro.html">Conheca o Hemocentro</a>&nbsp; &nbsp; &nbsp;
					  <a style="color:black;"class="nav-item nav-link" href="navegacao.html">Seja um Doador</a>&nbsp; &nbsp; &nbsp;
					  <a style="color:black;"class="nav-item nav-link" href="doencaSangue.html">Doenças do Sangue</a>&nbsp; &nbsp; &nbsp;
					  <a style="color:black;"class="nav-item nav-link" href="perguntas.html">Perguntas Frequentes</a>&nbsp; &nbsp; &nbsp;
					  <a style="color:black;"class="nav-item nav-link" href="contato.html">Contato</a>&nbsp; &nbsp; &nbsp;
				 </nav>
			 </div>
	</header><br>
 <body>
 <div class="tabelaVerificaDoador">
		<table>
			<tr style="color:red;font-size:20px;text-align:center">
				<th>NOME&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;</th>
				<th>RUA&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;</th>
				<th>BAIRRO&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;</th>
				<th>CIDADE&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;</th>
				<th>TELEFONE&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;</th>
		        <th>EXCLUIR</th>
			</tr>


  	<!-- vamos buscar os dados na tabela -->

  	<?php 

#criar a $sql
  	$sql = 'SELECT * FROM  doador';
  	$carregador = mysqli_query($conn,$sql);
    

    //fetch = buscar
    //array = vetor
  	while ($linha = mysqli_fetch_array($carregador)) {
	
  	 ?>

    <tr>
     <td> <?php echo $linha ['nome'];     ?> </td>
     <td> <?php echo $linha ['rua'];      ?></td>
     <td> <?php echo $linha ['bairro'];   ?></td>
     <td> <?php echo $linha ['cidade'];   ?></td>
     <td> <?php echo $linha ['telefone']; ?></td>


  <!--<td> <a   href="alteraPessoa.php?id=<?php echo $linha ['id'];?>"><i style=" color: green;" class= " fas fa-edit"></i> </a></td>-->

    <td> <a href="#" onclick="javascript: if (confirm ('Você realmente deseja excluir está pessoa?'))location.href='excluirDoador.php?id=<?php echo $linha ['id']; ?>'"><i style= " color: red;font-size:20px"class="fas fa-user-times fa-1x"></i></a></td>
    <!-- <td> <a href="excluirDoador.php?id=<?php echo $linha ['id']; ?>"><i style= " color: red;"class="fas fa-user-times"></i></a></td>-->

    </tr>
<?php
}
?>

</table>
</body>