<link rel="stylesheet" href="sidebarpatrocinios.css">
</script>

 <?php
                include('../check.php');
                require('connect.php');
                $usuarios = mysqli_query($con, "SELECT * FROM `user` WHERE `id_cliente` = '$user_id'");
                $usuario = mysqli_fetch_array($usuarios);
                ?>

    <div class="main-right">
        <div class="profile">
            <div class="hendel">

                <div class="imgsPatrocinios">
                    <img src="img/patrocinios.png" alt="Patrocinios">
                </div>
            </div>
        </div>

    </div>
    <script src="feed.js"></script>