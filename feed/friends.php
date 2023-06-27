<link rel="stylesheet" href="sidebarsugestoes.css">
<link rel="stylesheet" href="stylefeed.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<div class="colunadireita">
    <div id="menucolunadireita">
    <?php
    $_SESSION['userLogin'] = 2;
    require("connect.php");
    ?>
        <h3>Amigos</h3>
        <?php
        $amizades = mysqli_query($con, "SELECT * FROM `amizades`");
        while($amizade = mysqli_fetch_array($amizades)){
        $estadoSolicitacao = $amizade["estadoSolicitacao"];
        $codDe = $amizade["codDe"];
        $codPara = $amizade["codPara"];

        if($amizade["estadoSolicitacao"] == 1 && $_SESSION['userLogin'] == $codPara || $_SESSION['userLogin'] == $codDe){
        echo $amizade["codAmizade"];
        
        ?>     
        <ul class="blocoSolicitacao"> 
            <div class="perfilSolicitacao">
                <a href="#" class="info">
                    <img src="imgs/bobesponja.jpg" alt="" id="fotoPerfil">
                    <h3><strong>Gui</strong></h3>
                </a>
                <p class="solicitacao-hora">1 hora atrás</p>                                                     
                <div class="action">
                    
                    <form action="aceitarsolicitacao.act.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $amizade['codAmizade']?>" name="codAmizade">
                    </form>
                    <?php
                    echo "<a href=javascript:deletar($amizade[codAmizade])><svg xmlns='http://www.w3.org/2000/svg' height='27px' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                    <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                    </svg></a>";
                    ?>
                </div>
                
            </div>
        </ul>
        <?php }?>
        <?php
        }
        ?>
<script>
    function deletar(codAmizade){
        resp = confirm('Deseja excluir a amizade '+codAmizade+'?');
        if(resp == true){
            window.location = "excluiramizade.php?cod="+codAmizade;
        }
    }
</script>
        
    </div>
</div>