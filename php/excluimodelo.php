<?php
	//include("conecta.php");
	//include("conecta2.php");
include("conectaserv.php");

//conexão com o banco de dados e ações do php
	$local= "fdb14.biz.nf";
	$usuario = "2011625_lfdjs";
	$senhabanco = "09silva10lfdjs1991luiz";
	$banco = "2011625_lfdjs";

	$conexao = mysqli_connect ($local,$usuario,$senhabanco) or die ("Erro ao conectar ao banco de dados<br>".mysqli_error($conexao));
	mysqli_select_db($conexao,$banco) or die ("<br>Erro ao selecionar ao banco de dados<br>".mysqli_error($banco));

$idModelo = $_GET["id"];

$mostra = "delete from modelo where idModelo = '$idModelo'";


mysqli_query($conexao,$mostra) or die ("Error ".mysqli_error($mostra));

echo ("
	<script>
		alert('Modelo excluido com sucesso!');
		window.location= '../exibemodelo';
	</script>");




?>