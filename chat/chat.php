<?php
    include('../check.php');
	include('../check2.php');
    include('../sec.php');

    $id = $_GET['id'];

    $stmt = $con->prepare("SELECT * FROM user WHERE id_cliente = $id");
    $stmt->execute();
    $user2 = $stmt->get_result()->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>EnderChat - CSS</title>
	<link rel="icon" href="../assets/img/icon.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script defer src="papo.js"></script>
</head>

<?php include('../assets/php/navbarchat.php'); ?>
<a href="../index.php"> <img class="logo" src="../assets/img/logo.png" alt="EnderSoftwares"></a>

<body>
	<div class="container-fluid h-100">
		<div class="row justify-content-center h-100">
			<div class="col-md-4 col-xl-3 chat">
				<div class="cardContacts mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						<div class="input-group">
							<input type="text" class="form-control search" id="pesquisar" placeholder="Procurar..." onkeyup="search()">
							<div class="input-group-prepend">
								<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
							</div>
						</div>
					</div>
					<div class="card-body contacts_body">
						<ul class="contacts" id="searchContainer"></ul>
					</div>


					
				</div>
			</div>
			<div class="col-md-8 col-xl-6 chat">
				<div class="card">
					<div class="card-header msg_head">
						<div class="d-flex bd-highlight">
							<div class="img_cont">
								<img id="fotoperfil" src="../pictures/<?php echo $user2['foto']?>" class="rounded-circle user_img">
                                <input type="hidden" name="" value="<?php echo $user2['id_cliente']?>" id="inputt">
								<span class="online_icon"></span>
							</div>
							<div class="user_info">
								<a href="../perfil/perfil.php?id=<?php echo $id?>"><span id="nomeperfil"><strong><?php echo $user2['nome']?></strong></span></a> 
							</div>


							<div class="video_cam">
							</div>
						</div>




						<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
						<div class="action_menu">
							<ul>
								<li><i class="fas fa-user-circle"></i> View profile</li>
								<li><i class="fas fa-users"></i> Add to close friends</li>
								<li><i class="fas fa-plus"></i> Add to group</li>
								<li><i class="fas fa-ban"></i> Block</li>
							</ul>
						</div>
					</div>




					<div class="card-body msg_card_body" id="conversinha"></div>



					<div class="card-footer">
						<div class="input-group">
							<div class="input-group-append">
								<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
							</div>
							<textarea name="" class="form-control type_msg" id="enviarMensagem"
								placeholder="Escreve uma mensagem..."></textarea>
							<div class="input-group-append">
								<span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- JQuery -->
    <script>
        document.title = 'Converse com <?php echo $user2['nome'];?>';
        window.addEventListener('load',function(e){
            papo()
            setInterval(() => {
                papo()
            }, 3000);
        })
    </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="scripts.js"></script>
</body>

</html>