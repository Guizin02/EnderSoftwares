<link rel="stylesheet" href="sidebar.css">
</script>

 <?php
                include('../check.php');
                require('connect.php');
                $usuarios = mysqli_query($con, "SELECT * FROM `user` WHERE `id_cliente` = '$user_id'");
                $usuario = mysqli_fetch_array($usuarios);
                ?>

    <div class="main-left">
        <div class="profile">
            <a href="../perfil/index.php"><div class="profile-phots">
                <img src="../pictures/<?php echo $usuario['foto']?>" alt="Foto de Perfil" id="fotoPerfil">
            </div>
            <div class="hendel">
               
                <strong> <h1 class="username-sidebar"><?php echo $usuario['nome'];?> <?php echo $usuario['sobrenome']; ?></h1> </strong></a>
                <p class="text-gry"><?php echo $usuario['tipo_user']?></p>
            </div>
        </div>



        <div class="side-bar">

            <a href="feed.php" class="menu-item active">
                <span><img src="icon/home.svg" class="icon1"></span>
                <h3>Inicio</h3>
            </a>


    

            <a class="menu-item ">
                <span><img src="icon/search.svg" class="icon1"></span>
                <h3>Pesquisar</h3>
            </a>


            <a class="menu-item">
                <span> <img src="icon/feed.svg" class="icon1"></span>
                <h3>Notificações</h3>
            </a>

            <a href="trabalhos.php" class="menu-item ">
                <span><img src="icon/paste.svg" class="icon1"></span>
                <h3>Trabalhos</h3>
            </a>

            <?php if($usuario['tipo_user'] == 'programador'){ ?>
            <a href="vagas.php" class="menu-item">
                <span><img src="icon/book.svg" class="icon1"></span>
                <h3>Vagas</h3>
            </a>
            <?php } ?>
            <a class="menu-item chat">
                <span><svg xmlns="http://www.w3.org/2000/svg" height="22px" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg></span>
            </a>

            <?php if($usuario['tipo_user'] == 'cliente'){ ?>
            <a href="postar.php" class="menu-item">
                <span><img src="icon/cloud-arrow-up.svg" class="icon1"></span>
                <h3>Postar</h3>
            </a>
            <?php } ?>


            <a class="menu-item g">
                <span><img src="icon/config.svg" class="icon1"></span>
                <h3>Configurações</h3>
            </a>
            
            <div class="btnEnderChat">
                <a href="../chat/index.php" class="botao">
                    EnderCHAT
                </a>
            </div>
        </div>

    </div>
    <script src="feed.js"></script>