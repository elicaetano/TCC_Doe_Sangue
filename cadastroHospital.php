<?php 	

header("content-type:text/html;charset=utf8");

 ?>
<!--link para icones-->

	  <script src="https://kit.fontawesome.com/db3a9100e9.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">

<body>

  <br>

	<div  class="centroCadastroHospital">
		<h1 class="titulo"> Cadastro Hospital </h1>

			<form action="gravarHospital.php" method="post"> <!-- para usa o mysql essa linha-->
				<div class="form-group">
					<label>Nome</label>
				    <input type="text" class="form-control" id="nome" name="nome_resposavel_cadastro" placeholder="Responsavel pelo cadastro" maxlength="80" required>
					
				</div>

					<div class="form-group">
						<label>Nome do Hospital</label>
						<input type="text" class="form-control" id="nome" name="nome_hospital" placeholder="Digite o nome do Hospital" maxlength="80" required>
					</div>

					<div class="form-group">
						<label>Diretor</label>
						<input type="text" class="form-control " id="diretor" name="nome_diretor"placeholder="Digite seu Nome" maxlength="80" required>
					</div>

					<div class="form-group">
						<label>CNPJ</label>
						<input type="text" class="form-control" id="cnjp" name="cnpj" placeholder="Digite sua cnpj" maxlength="15" required>
					<div class="form-group">
						<label>Telefone</label>
						<input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite seu telefone" maxlength="15" required>
					</div>

					<div class="form-group">
						<label>Rua</label>
						<input type="text" class="form-control " id="rua" name="rua"placeholder="Digite seu e-mail" maxlength="80" required>
					</div>


					<div class="form-group">
						<label>Bairro</label>
						<input type="text" class="form-control " id="bairro" name="bairro"placeholder="Digite seu Bairro" maxlength="80" required>
					</div>

					<div class="form-group">
						<label>CEP</label>
						<input type="text" class="form-control " id="cep" name="cep"placeholder="Digite seu CEP" maxlength="10" required>
					</div>

					<div class="form-group">
						<label>Cidade</label>
						<input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a Cidade" maxlength="50" required>
					</div>

					<div class="form-group">
						<label>UF</label>
						<input type="text" class="form-control " id="uf" name="uf"placeholder="Digite o UF" maxlength="2" required>
					</div>

					<div>
						<label>Senha</label><br>
						<input type="password" style="height: 37px; width:50%; float: left;"size="70" id="senha" name="senha" placeholder="Digite sua senha"maxlength="8" required="">
					<div> <!-- botao do olho-->
					<button type="button" onclick="mostrarSenha()"><i class="far fa-eye fa-2x"></i></button>

				</div><br>
         		<br>

				<button type="submit" class="btn btn-primary" title="Envia as informações para o banco de dados">Enviar</button>
				<button type="reset" class="btn btn-danger" title="Apaga as informações do formulario">Apagar</button>
				<button type="button" class="btn btn-warning cor" title="Fecha o formulario"><a href="navegacao.html">Fechar</button></a>

			</form>

				<!--esse script é para mostra a senha-->
		<script type="text/javascript">  
				function mostrarSenha(){
					var tipo=document.getElementById('senha');

					if (tipo.type=="password") {

						tipo.type="text";
					}

					else{
						tipo.type="password";
					}
				}
		
		</script>

	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

 </body>