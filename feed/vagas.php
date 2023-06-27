<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vagas</title>
    <link rel="stylesheet" href="stylefeed.css">
    <link rel="stylesheet" href="postar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <?php include('../check.php');?>
    <?php include('navbarfeed.php');?>
    <?php include('sidebar.php');?>
    <?php include('mobilenavbar.php');?>
    <?php include('sidebarpatrocinios.php');?>
    <div id="feed">
        <div class="foryou">
            <?php
    require('connect.php');
    $vagas = mysqli_query($con, "SELECT * FROM `vagas` INNER JOIN user ON user.id_cliente = vagas.id_usuario ORDER BY id_vaga DESC");
    while($vaga = mysqli_fetch_array($vagas)){

     echo "<div class=publicacaofeed>";
        echo "<div class=head>";
            echo "<div class=user>";
                echo "<div class=profile-phots>";
                    echo "<img src='../pictures/$vaga[foto]' alt='Foto de Perfil' id='fotoPerfil'>";                          
                echo "</div>";
                        echo "<div class=info>";
                            echo "<h3>$vaga[nome] $vaga[sobrenome]</h3>";
                            echo "<small>$vaga[data_vaga]</small>";
                        echo "</div>";                               
                echo "</div>";
                 echo "<span class=boxitens>";
                 if($vaga['id_usuario'] == $user_id){
                     echo "<a href=javascript:excluir($vaga[id_vaga])><svg xmlns='http://www.w3.org/2000/svg' height='27px' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                     <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                 </svg></a>";
                }
                 ?>
            <div class="btn-group dropright">
                <button type="button" class="dropdownDenunciar" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <svg xmlns='http://www.w3.org/2000/svg' height='27px' fill='currentColor' class='bi bi-three-dots'
                        viewBox='0 0 16 16'>
                        <path
                            d='M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z' />
                    </svg>
                </button>

                <div class="dropdown-menu">
                    <a href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-exclamation" viewBox="0 0 16 16">
                            <path
                                d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0L7.1 4.995z" />
                        </svg> Denunciar</a>
                </div>
            </div>
            <?php
                   echo "</span>";
                   echo "</div>";
                    echo "<div class='caption vagas'>";
                        echo "<h2><strong>$vaga[titulo_vaga]</strong> </h2>";
                        echo "<p>$vaga[descricao_vaga]</p>";
                    echo "</div>";
                    echo "<a href=vaga.php?cod=$vaga[id_vaga]>Ver Tudo</a>";
                               echo "<div class=action-buttons>";
                               echo "<div class=inter-action-button>";
                               echo "<span><svg xmlns='http://www.w3.org/2000/svg' height='27px' fill='currentColor' class='bi bi-bookmark-fill' viewBox='0 0 16 16'>
                               <path d='M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z'/>
                             </svg></span>";
   

                        echo "<span><svg xmlns='http://www.w3.org/2000/svg' height='27px' fill='currentColor' class='bi bi-send-fill' viewBox='0 0 16 16'>
    <path  d='M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z'/>
    </svg></span>";
                            echo "</div>";
                                echo "<div class=share>";
                                ?>
            <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="sharePublication">
                <span><svg xmlns='http://www.w3.org/2000/svg' height='27px' fill='currentColor' class='bi bi-share-fill'
                        viewBox='0 0 16 16'>
                        <path
                            d='M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z' />
                    </svg></span>
            </button>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content" id="modal-content-share">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Compartilhe</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="compartilharModal">
                            <p>endersoftware/feed.php/cod
                                <?php echo $vaga['id_vaga'];?>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                                echo "</div>";
                            echo "</div>";
                           

            
    echo "</div>";
    }
    ?>

        </div>
    </div>
    <script>
        function excluir(id_vaga){
        resp = confirm('Deseja excluir o registro '+id_vaga+'?');
        if(resp == true){
            window.location = "excluirvaga.php?cod="+id_vaga;
        }
    }
    </script>
</body>

</html>