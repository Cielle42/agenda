<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include_once('header.php'); ?>
</head>

<body class="back-contatos">
	<?php include_once('nav-dashboard.php'); ?>

	<div class="register-box">
		<div class="register-box-body">
			<div class="row" style="text-align: center">
				<span class="register-title">
					Cadastro de Contatos
				</span>
			</div>
			<hr class="hr-separator">
			<div class="row" style="text-align: center">
				<p class="register-subtitle">Forneça os Dados Abaixo</p>
			</div>

			<!-- Formulário de cadastramento de contatos -->
			<form action="grava-contato.php" method="post" autocomplete="off">

				<!-- nome do contato -->
				<div class="input-group">
					<span class="input-group-addon" id="input-user-name">
						<span class="fas fa-globe"></span>
					</span>
					<input type="text" class="form-control"
						name="nome_contato" required placeholder="Nome do Contato"
						aria-describedby="input-nome_contato">
				</div>
				<br>


<!-- endereco do contato -->
<div class="input-group">
					<span class="input-group-addon" id="input-endereco">
						<span class="fas fa-home"></span>
					</span>
					<input type="text" class="form-control"
						name="endereco" required placeholder="Endereco"
						aria-describedby="input-endereco">
				</div>
				<br>

<!-- nro_endereco do contato -->
<div class="input-group">
					<span class="input-group-addon" id="input-nro_endereco">
						<span class="fas fa-home"></span>
					</span>
					<input type="text" class="form-control"
						name="nro_endereco" required placeholder="Numero do Endereco"
						aria-describedby="input-nro_endereco">
				</div>
				<br>

				<!-- complemento do contato -->
<div class="input-group">
					<span class="input-group-addon" id="input-complemento">
						<span class="fas fa-home"></span>
					</span>
					<input type="text" class="form-control"
						name="complemento" required placeholder="Complemento do Endereco"
						aria-describedby="input-complemento">
				</div>
				<br>

				<!-- bairro do contato -->
<div class="input-group">
					<span class="input-group-addon" id="input-bairro">
						<span class="fas fa-home"></span>
					</span>
					<input type="text" class="form-control"
						name="bairro" required placeholder="Bairro do Endereco"
						aria-describedby="input-bairro">
				</div>
				<br>

<!-- cidade do contato - vem da tabela cad-cidade -->
<div class="input-group">
					<span class="input-group-addon" id="input-cidade">
						<span class="fas fa-home"></span>
					</span>
					<input type="text" class="form-control"
						name="cidade" required placeholder="Cidade do Endereco"
						aria-describedby="input-cidade">
				</div>
				<br>


			<!-- cep do contato -->
<div class="input-group">
					<span class="input-group-addon" id="input-cep">
						<span class="fas fa-home"></span>
					</span>
					<input type="text" class="form-control"
						name="cep" required placeholder="Cep do Endereco"
						aria-describedby="input-cep">
				</div>
				<br>

				<!-- Botão de envio -->
				<div class="row" style="margin-bottom:10px">
					<div class="col-xs-12">
						<button type="submit"
							class="btn btn-primary btn-block btn-flat">
							Inserir <span class="fas fa-chevron-circle-right"></span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>

<?php
	include_once('footer.php');
	include_once('js.php');
?>
</body>
</html>