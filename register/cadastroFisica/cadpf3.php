<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="css/cadf3.css">
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
				<form action="php/cadpf3.act.php" id="address-form" method="POST">
					<h2>Informações Pessoais
					</h2>

					<div class="inputbox">
                    <input id="date" type="text" name="date" onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'">
					<label for="date">Data de Nascimento</label>
					</div>

					<!-- <div class="inputbox">
                    <input id="carac" type="text" name="cpf" required>
					<label for="carac">CPF</label>
					</div> -->


					


					<div class="forget">
						<label for=""><a href="../login.php"> Quero preencher essas informações depois</a></label>
					</div>
					<button class="botao" type="submit" onclick="Reset()">Continuar</button>

				</form>
			</div>
		</div>
	</section>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<script>
		function Reset(){
			window.location.reload()
		}
	</script>
</body>

</html>