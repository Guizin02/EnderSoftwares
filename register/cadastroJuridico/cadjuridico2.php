<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="css/cadj2.css">
	<link rel="icon" href="../../assets/img/icon.png">
	<title>Ender Softwares - Cadastro</title>
</head>
<body>
	<section>
		<div class="form-box">
			<div class="form-value">
				<div class="logo">
				<a href="../../index.php"> <img src="../../assets/img/logo.png" alt="Ender Softwares"> </a>
				</div>
				
				<form action="php/cadjr2.act.php" method="POST">
					<h2> Complete as suas informações! </h2>


					<div class="inputbox">
						<input id="nomefantasia" type="text" name="name" required>
						<label for="nomefantasia">Nome Fantasia</label>
					</div>

					<div class="inputbox">
						<input id="razaosocial" type="text" name="razao" required>
						<label for="razaosocial">Razão Social</label>
					</div>

					<div class="inputbox">  
						<input id="cnpj" type="number" name="cnpj" required>
                        <label for="cnpj">CNPJ</label>
                    </div>


					<div class="forget">
						<label for=""><a href="cadjuridico3.php"> Quero preencher essas informações depois!</a></label>

					</div>
					<button type="submit" class="botao" onclick="Reset()">Continuar</a></button>

				</form>
			</div>
		</div>
	</section>
	<script>
		function Reset(){
			window.location.reload()
		}
	</script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>