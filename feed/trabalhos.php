<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylefeed.css">
    <link rel="stylesheet" href="trabalhos.css">
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
        <?php if($usuario['tipo_user'] == 'programador'){ ?>
        <h1 class="textTrabalhos">Trabalhos Aceitos</h1>
        <?php amigos($con); ?>
        <?php } ?>
        <?php if($usuario['tipo_user'] == 'cliente'){ ?>
        <h1 class="textTrabalhos"><strong>Solicitações de Trabalho</strong></h1>
        <?php solicitacoes($con);?>
        <?php } ?>
        </div>
        </div>
    </body>
</html>