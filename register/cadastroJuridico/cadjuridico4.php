
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" href="css/cadj4.css">
	<link rel="icon" href="../../assets/img/icon.png">
	<title>Ender Softwares - Cadastro</title>
	<script src="../assets/js/date.js" defer></script>
</head>
<body>
<?php

?>
	<section>
		<div class="form-box">
			<div class="form-value">
				<div class="logo">
				<a href="../../index.php"> <img src="../../assets/img/logo.png" alt="Ender Softwares"> </a>
				</div>
				<form action="php/cadjr4.act.php" id="address-form" method="POST">
					<h2>Informações Pessoais</h2>
					<div class="inputbox">
                    <input id="inicio" type="text" name="inicio" onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'">
					<label for="inicio">Fundação</label>
					</div>

					<div class="inputbox">
                    <input id="desc" type="text" name="desc"  required
                    data-input>
					<label for="desc">Descrição</label>
					</div>

					


					<div class="forget">
						<label for=""><a href="../../login.php"> Quero preencher essas informações depois</a></label>
					</div>
					<button class="botao" type="submit">Continuar</button>

				</form>
			</div>
		</div>
	</section>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>