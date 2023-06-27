<?php
include('../check.php');

	function carrega_pagina($con){
		$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'inicio';
		$dir = "pags/";
		$ext = ".php";

		if(file_exists($dir.$pagina.$ext)){
			include($dir.$pagina.$ext);
		}else{
			echo "<div class='alert alert-danger'>Página não encontrada</div>";
		}
	}

	function get_users($con){
		$sql = $con->prepare("SELECT * FROM user ORDER BY id_cliente ASC");
		$sql->execute();
		$get = $sql->get_result();
		$total = $get->num_rows;

		if($total > 0){
			echo "<ul class=list-users>";
			while($dados = $get->fetch_array()){
				if($_SESSION['userLogin'] != $dados['id_cliente']){
				echo "<li>";
				echo "<strong> <a href='../perfil/perfil.php?id=$dados[id_cliente]' class='nameuser'> </strong>";
				echo "<img src='../pictures/$dados[foto]' alt='Foto de Perfil' id='fotoPerfilMenor'>";
				echo "{$dados['nome']}";
				echo "</a>";
				verifica_solicitacoes($con, $_SESSION['userLogin'], $dados['id_cliente']);
				echo "</li>";
				}
			}
			echo "</ul>";
		}
	}

	function get_perfil($con, $perfil){
		$sql = $con->prepare("SELECT * FROM user WHERE id_cliente = '$perfil'");
		$sql->execute();
		$get = $sql->get_result();
		$total = $get->num_rows;

		if($total > 0){
			$dados = $get->fetch_assoc();
			echo "<h4>{$dados['nome']} <small>cod: {$dados['id_cliente']}</small></h4>";
			verifica_solicitacoes($con, $_SESSION['userLogin'], $perfil);
		}
	}
	function amigos($con){
		$sql = $con->prepare("SELECT * FROM amigos WHERE (id_de = $_SESSION[userLogin] OR id_para = $_SESSION[userLogin]) AND status = 1");
		$sql->execute();
		$get = $sql->get_result();
		$total = $get->num_rows;

		if($total>0){
			echo "<ul class=list-users>";
			while ($amigo=$get->fetch_array()) {
				$sql = $con->prepare("SELECT * FROM user WHERE (id_cliente = $amigo[id_de] OR id_cliente = $amigo[id_para]) AND id_cliente != $_SESSION[userLogin]");
				$sql->execute();
				$outro = $sql->get_result();
				while ($dados = $outro->fetch_array()) {
					echo "<li>";
					echo "<strong> <a href='../perfil/perfil.php?id=$dados[id_cliente]' class='nameuser'> </strong>";
					echo "<img src='../pictures/$dados[foto]' alt='Foto de Perfil' id='fotoPerfilMenor'>";
					echo "{$dados['nome']}";
					echo "</a>";
					echo "<div class='buttons-action'>";
					echo "<a href='?pagina=desfazer-amizade&id={$amigo['id']}' class='btn btn-danger btn-sm'>Desfazer</a>";
					echo "</div>";
					echo "</li>";
				}
			}
			echo "</ul>";
		}else{
			echo "<p style='font-size: 12px; text-align:center;'>Nenhuma proposta aceita</p>";
		}
	}

	function verifica_amizade($con, $id_de, $id_para){
		$sql = $con->prepare("SELECT * FROM amigos WHERE id_de = '$id_de' AND id_para = '$id_de' AND status = 0");
		$sql->execute();

		return $sql->get_result()->num_rows;
	}

	function send_solicitation($con, $id_para){
		if(verifica_amizade($con, $_SESSION['userLogin'], $id_para) <= 0){
			$sql = $con->prepare("INSERT amigos (id_de, id_para) VALUES (?, ?)");
			$sql->bind_param("is", $_SESSION['userLogin'], $id_para);
			$sql->execute();

			if($sql->affected_rows > 0){
				redireciona("trabalhos.php");
			}else{
				return false;
			}
		}else{
			redireciona("trabalhos.php");
		}
		
	}

	function verifica_solicitacoes($con, $id_de, $id_para){		
		$sql = $con->prepare("SELECT * FROM amigos WHERE (id_de = '$id_de' AND id_para = '$id_para') OR (id_para = '$id_de' AND id_de = '$id_para')");
		$sql->execute();
		$get = $sql->get_result();
		$total = $get->num_rows;

		if($total > 0){
			$dados = $get->fetch_assoc();

			if($dados['status'] == 1){
				echo "<div class='buttons-action'>";
				echo "<a href='?pagina=desfazer-amizade&id={$dados['id']}' class='btn btn-danger btn-sm'>Desfazer</a>";
				echo "</div>";
			}

			if($dados['id_para'] == $id_para && $dados['id_de'] == $id_de && $dados['status'] == 0){
				echo "<div class='buttons-action'>";
				echo "<a href='?pagina=desfazer-amizade&id={$dados['id']}' class='btn btn-warning btn-sm'>Cancelar Solicitação</a>";
				echo "</div>";
			}

			if($dados['id_de'] == $id_para && $dados['id_para'] == $id_de && $dados['status'] == 0){
				echo "<div class='buttons-action'>";
				echo "<a href='?pagina=aceitar-amizade&id={$dados['id_de']}' class='btn btn-success btn-sm'>Aceitar</a>";
				echo "<a href='?pagina=desfazer-amizade&id={$dados['id']}' class='btn btn-danger btn-sm'>Recusar</a>";
				echo "</div>";
			}
		}else if($total <= 0  && $id_para != $id_de){
			echo "<div class='buttons-action'>";
			echo "<a href='?pagina=solicitar-amizade&id={$id_para}' class='btn btn-success btn-sm'>Fazer Proposta</a>";
			echo "</div>";
		}
	}
	


	function deleta_solicitacao($con, $id){
		$sql = $con->prepare("DELETE FROM amigos WHERE id = '$id'");
		$sql->execute();

		if($sql->affected_rows > 0){
			redireciona("trabalhos.php");
		}else{
			return false;
		}
	}

	function recusar_solicitacao($con, $id){
		$sql = $con->prepare("DELETE FROM amigos WHERE id = '$id'");
		$sql->execute();

		if($sql->affected_rows > 0){
			redireciona("trabalhos.php");
		}else{
			return false;
		}
	}

	function aceita_solicitacao($con, $id_de){
		$sql = $con->prepare("SELECT * FROM amigos WHERE id_de = ? AND id_para = ? AND status = 0");
		$sql->bind_param("si", $id_de, $_SESSION['userLogin']);
		$sql->execute();
		$get = $sql->get_result();
		$total = $get->num_rows;

		if($total > 0){
			$dados = $get->fetch_assoc();

			if($dados['id_para'] == $_SESSION['userLogin']){
				if(atualiza_solicitacao($con, $id_de, $_SESSION['userLogin']) > 0){
					redireciona("trabalhos.php");	
				}else{
					echo "erro ao atualizar;";
				}
				
			}else{
				return false;
			}
		}
	}

	function atualiza_solicitacao($con, $id_de, $id_para){
		$sql = $con->prepare("UPDATE amigos SET status = 1 WHERE id_de = '$id_de' AND id_para = '$id_para'");
		$sql->execute();

		return $sql->affected_rows;
	}

	function redireciona($dir){
		echo "<meta http-equiv='Refresh' content='0; url={$dir}'/>";
	}

	function solicitacoes($con){
		if(isset($_SESSION['userLogin'])){
			$sql = $con->prepare("SELECT * FROM amigos INNER JOIN user ON user.id_cliente = amigos.id_de WHERE id_para = ? AND status = 0");
			$sql->bind_param("i", $_SESSION['userLogin']);
			$sql->execute();
			$get = $sql->get_result();
			$total = $get->num_rows;

			if($total > 0){
				echo "<ul class='solicitacoes'>";
				while($dados = $get->fetch_array()){
					echo "
						<li class='blocoSolicitacao'>
						<a href='../perfil/perfil.php?id=$dados[id_cliente]' target='_blank' class='info'>
						<img src='../pictures/$dados[foto]' alt='Foto de Perfil' id='fotoPerfil'>
						{$dados['nome']}
						</a>
						<div class='dados-solicitacao'>
							<div class='buttons-action'>
							<a href='?pagina=aceitar-amizade&id={$dados['id_de']}' class='btn btn-success btn-sm'>Aceitar</a> 
							<a href='?pagina=recusar-solicitacao&id={$dados['id']}' class='btn btn-danger btn-sm'>Recusar</a>
							</div>
						</div>
						</li> ";
				}
				echo "</ul>";
			}else{
				echo "<p style='font-size: 12px; text-align:center;'>Sem novas propostas para aceitar</p>";
			}
		}else{
			exit();
		}
	}

	function return_total_solicitation($con){
		$sql = $con->prepare("SELECT * FROM amigos WHERE id_para = ? AND status = 0");
		$sql->bind_param("i", $_SESSION['userLogin']);
		$sql->execute();
		$get = $sql->get_result();
		$total = $get->num_rows;
		if($total > 0){
			return ": ".$total;
		}
		
	}

?>