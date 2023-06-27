<!DOCTYPE html>
<html lang="pt-br">

<head>
	<link rel="stylesheet" href="css/cadj3.css">
	<link rel="icon" href="../../assets/img/icon.png">
	<script src="../../assets/js/cep.js" defer></script>
	<title>Ender Softwares - Cadastro</title>
</head>

<body>
	<section>
		<div class="form-box">
			<div class="form-value">
				<div class="logo">
					<a href="../../index.php"> <img src="../../assets/img/logo.png" alt="Ender Softwares"> </a>
				</div>
				<form action="php/cadjr3.act.php" method="POST">
					<h2>Informações de Endereço</h2>

					<div class="inputbox">
						<input id="cep" type="text" name="cep" maxlength="8" minlength="8" required>
						<label for="cep">CEP</label>
					</div>


					<div class="inputbox">
						<input id="estado" type="text" name="estado" required>
						<label for="estado">Estado</label>
					</div>


					<div class="inputbox">
						<input id="cidade" type="text" name="cidade" required data-input disable>
						<label for="cidade">Cidade</label>
					</div>

					<div class="forget">
						<label for=""><a href="cadjuridico4.php"> Quero preencher essas informações depois!</a></label>

					</div>
					<button type="submit" class="botao">Continuar</button>

				</form>
			</div>
		</div>
	</section>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>