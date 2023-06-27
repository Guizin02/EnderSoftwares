<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" href="css/cadf.css">
	<link rel="icon" href="../../assets/img/icon.png">
	<title>Ender Softwares - Cadastro Pessoa Física</title>
</head>
<body>
	<section>
		<div class="form-box">
			<div class="form-value">
				<div class="logo">
				<a href="../../index.php"> <img src="../../assets/img/logo.png" alt="Ender Softwares"> </a>
				</div>
				<form action="php/cadpf1.act.php" method="POST">
					<h2>Vamos começar</h2>
					<input type="hidden" name="tipo" value="cliente">
					<div class="inputbox">
						<input id="firstname" type="text" name="nome" required>
						<label for="firstname">Nome</label>
					</div>

					<div class="inputbox">
						<input  id="lastname" type="text" name="sobrenome" required>
						<label for="lastname">Sobrenome</label>
					</div>

					

					<div class="inputbox">  
						<input id="email" type="email" name="email" required>
                    <label for="email">Email</label>
                </div>


					<div class="inputbox">
						<input id="senha" type="password" name="senha" required>
						<label>Senha</label>
					</div>



					<div class="forget">
						<label for="">Ja tem conta? <a href="../login.php">Entrar</a></label>

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