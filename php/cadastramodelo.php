<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>
<?php

$nomeModelo = $_POST["nomeModelo"];

echo ("O modelo digitado é: ".$nomeModelo);
	
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
$insere = "insert into modelo (nomeModelo) values ('$nomeModelo')";

mysqli_query($conexao,$insere) or die ("Registro não inserido<br> ".mysqli_error($insere));

echo ("<br>Modelo ".$nomeModelo." inserido com sucesso<br>");

?>

<a href="../inseremodelo">Inserir novo Modelo</a>

