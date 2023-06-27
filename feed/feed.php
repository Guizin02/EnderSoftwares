<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="stylefeed.css">
    <link rel="stylesheet" href="comentario.css">
    <link rel="stylesheet" href="like.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <title>feed</title>

  </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <body id="feedbody">
        <?php include('../check.php');?>
        <?php include('navbarfeed.php');?>
        <?php include('sidebar.php');?>
        <?php include('sidebarsugestoes.php');?>
        <?php include('mobilenavbar.php');?>
        
        <div id="feed">
        <div class="foryou">
        <?php
        @session_start();
        $usuarios = mysqli_query($con, "SELECT * FROM `user` WHERE `id_cliente` = '$user_id'");
        $usuario = mysqli_fetch_array($usuarios);
        ?>
        <form action="feed.act.php" method="post" enctype="multipart/form-data" class="creatPost" id="form-create-post">
            <div class="box-text-infos">
                <div class="profile-infos">
                    <div class="profile-phots">
                        <img src="../pictures/<?php echo $usuario['foto']?>" alt="Foto de perfil" id="fotoPerfil">
                    </div>
                        
                        <input type="hidden" value="<?php echo $user_id ?>" name="codUsuario">
                    
                      <textarea name="descricao" placeholder="No que está pensando, <?php echo $usuario['nome'];?>?" class="creatPostText" id="descricaoPost" maxlength="999"></textarea>
                </div>

                   <div class="form-buttons">
                       <input type="file" value="Foto" name="Foto" id="enviarFoto">
                       
                       <button type="submit" class="botaop" name="add_publicacao">Publicar</button>
                   </div>
            </div>
        </form>

     <?php
    
    if(isset($_SESSION['msg'])){
        echo "<p class=alert style='margin: 0; color:white;'>$_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }
    require('connect.php');
    $publicacoes = mysqli_query($con, "SELECT * FROM `publicacoes` INNER JOIN user ON user.id_cliente = publicacoes.codUsuario ORDER BY codPublicacao DESC");
    while($publicacao = mysqli_fetch_array($publicacoes)){
    
     echo "<div class=publicacaofeed>";
     echo "<div class=head>";
         echo "<div class=user>";
         echo "<a href=../perfil/perfil.php?id=$publicacao[codUsuario]>";
             echo "<div class=profile-phots>";
                 echo "<img src='../pictures/$publicacao[foto]' alt='Foto de Perfil' id='fotoPerfil'>";                          
             echo "</div>";
                     echo "<div class=info>";
                         echo "<h3>$publicacao[nome] $publicacao[sobrenome]</h3>";
        echo "</a>";
                         echo "<small>$publicacao[data]</small>";
                     echo "</div>";                               
         echo "</div>";
                 echo "<span class=boxitens>";
                 if($publicacao['codUsuario'] == $user_id){
                     echo "<a href=javascript:excluir($publicacao[codPublicacao])><svg xmlns='http://www.w3.org/2000/svg' height='27px' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                     <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                 </svg></a>";
                }
                 ?>
                    <div class="btn-group dropright">
                    <button type="button" class="dropdownDenunciar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns='http://www.w3.org/2000/svg' height='27px' fill='currentColor' class='bi bi-three-dots' viewBox='0 0 16 16'>
                        <path d='M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z'/>
                        </svg>
                    </button>
                    
                    <div class="dropdown-menu">
                        <a href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation" viewBox="0 0 16 16">
                        <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0L7.1 4.995z"/>
                        </svg> Denunciar</a>
                    </div>
                    </div>
                 <?php
                   echo "</span>";
                   echo "</div>";
                           echo "<div class=feed-phots>";
                               echo "<img src=$publicacao[fotoPublicacao] alt='Imagem da Publicação' id=imgPublicacao>";
                           echo "</div>";
                               echo "<div class=action-buttons>";
                               echo "<div class=inter-action-button>";

                                    echo "<button id='like' class='curtir' data-publi=$publicacao[codPublicacao]> 
                                    <svg xmlns='http://www.w3.org/2000/svg' height='27px' fill='currentColor' class='bi bi-heart-fill' viewBox='0 0 16 16' id='iconcoracao'>
                                    <path fill-rule='evenodd' d='M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z'/>
                                    </svg>
                                    </button>";

                                    echo "<a href=comentario.php?cod=$publicacao[codPublicacao]><span><svg xmlns='http://www.w3.org/2000/svg' height='27px' fill='currentColor' class='bi bi-chat-right-dots-fill' viewBox='0 0 16 16' id='iconComment'>
                                    <path d='M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 1 0-2 1 1 0 0 1 0 2z'/>
                                    </svg></span></a>";

                                    echo "<a href=../chat/chat.php?id=$publicacao[codUsuario]><span><svg xmlns='http://www.w3.org/2000/svg' height='27px' fill='currentColor' class='bi bi-send-fill' viewBox='0 0 16 16'>
                                    <path  d='M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z'/>
                                    </svg></span></a>";

                            echo "</div>";
                                echo "<div class=share>";
                                ?>
                                <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="sharePublication">
                                    <span><svg xmlns='http://www.w3.org/2000/svg' height='27px' fill='currentColor' class='bi bi-share-fill' viewBox='0 0 16 16'>
                                    <path d='M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z'/>
                                    </svg></span>
                                </button>
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content" id="modal-content-share">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Compartilhe</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" id="compartilharModal">
                                        <p>endersoftware/feed.php/cod<?php echo $publicacao['codPublicacao'];?></p>
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
                            ?>
<?php
  echo "<p class='curtir' data-publi=$publicacao[codPublicacao]> $publicacao[curtidas] curtidas</p>";
                echo "<div class=caption>"; 
                    echo "<p id=descricao><strong>$publicacao[nome]</strong> $publicacao[descricao]</p>";
                echo "</div>";
$comentario = mysqli_query($con, "Select * from `comentarios` INNER JOIN user ON user.id_cliente = comentarios.codUsuario WHERE `codPublicacao` = $publicacao[codPublicacao] order by codComentario DESC limit 1");
    while($comentarios = mysqli_fetch_array($comentario)){
        echo "<div class=box-comment-user>";
            echo "<img src='../pictures/$comentarios[foto]' alt='Foto de Perfil' id='fotoPerfilMenor'>";    
        ?>
            <h3 class=comment-username><strong><?php echo $comentarios['nome']?></strong></h3>
        <?php
                echo "<div id=comentario-primeiro>";
                    echo "<p>$comentarios[comentario]</p>";
                echo "</div>";
        echo "</div>";
        echo "<a href=comentario.php?cod=$publicacao[codPublicacao] class='verComments'><p><small>Ver todos os comentários</small></p></a>";
                }
                
                ?>
    <form action=comentario.act.php method=post enctype=multipart/form-data id='form-creat-comment'>
        <div class="usuario">
                <div class="profile-phots">
                    <img src="../pictures/<?php echo $usuario['foto']?>" alt="Foto de Perfil" id="fotoPerfilMenor">              
                </div>
            <div class="info">
                    <h3 class="comment-username"><strong><?php echo $usuario['nome']; ?></strong></h3>
            </div>
            <div class="txtcomentario">
                <textarea name="comentario" id="comentario" rows="1" maxlength="999" require></textarea>
            </div>
                <input type="submit" value="Comentar" class="botaoc" name="add_comentario">
                <input type="hidden" value="<?php echo $user_id ?>" name="codUsuario">
                <input type="hidden" value="<?php echo $publicacao['codPublicacao']?>" name="idpub" id="idpub">
        </div>
    </form>
                <?php
    echo "</div>";
    }
    ?>
    </div>
    </div>
    
<?php
    @session_start();
    if(isset($_SESSION['msg'])){
    echo "<p class=alertcad>$_SESSION[msg]</p>";
    unset($_SESSION['msg']);
    }
    ?>
    <script>
    function excluir(codPublicacao){
        resp = confirm('Deseja excluir o registro '+codPublicacao+'?');
        if(resp == true){
            window.location = "excluirpublicacao.php?cod="+codPublicacao;
        }
    }

    var tx = document.getElementsByTagName('textarea');
for (var i = 0; i < tx.length; i++) {
  tx[i].addEventListener("input", OnInput, false);
}

function OnInput() {
  this.style.height = 'auto';
  this.style.height = (this.scrollHeight) + 'px';
} 


btCurtir = document.querySelectorAll('button.curtir');
    pCurtir = document.querySelectorAll('p.curtir');
    btCurtir.forEach(element => {
    element.addEventListener('click',()=>{
    id = element.dataset.publi;
    $.ajax({
        url: "like.act.php?id="+id+"&user="+<?php echo $user_id; ?>,
        success: function (response) {
        $(pCurtir).html(response+ " curtidas");
    }
    });
    });
    });
</script>


<script src="https://kit.fontawesome.com/38883336bd.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="feed.js"></script>
</body>
</html>
