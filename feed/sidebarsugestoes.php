<link rel="stylesheet" href="sidebarsugestoes.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<?php
    include('../check.php');
	@session_start();
	$_SESSION['userLogin'] = $user_id;
	require("connect.php");
	include("lib/functions.php");
?>

<div class="colunadireita">
    <div id="menucolunadireita">
        <div class="content">
        <h1>Propostas<?php echo return_total_solicitation($con);?></h1>
        <?php solicitacoes($con);?>
            
        <p class="usuario"><strong>Trabalhos</strong></p>
        
        <?php carrega_pagina($con);?>
        <h1 class="propostasAceitas">Propostas Aceitas:</h1>
        <?php amigos($con); ?>
        </div>
        
    </div>
</div>