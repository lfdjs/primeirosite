<head>
	<meta charset="UTF-8">
	<title>Altere a sua cor</title>
	<link rel="stylesheet" type="text/css" href="../css/tables.css" />
</head>

<center>
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

$idCor = $_GET["id"];
$mostra = "select * from cor where idCor='$idCor'";
$exibe = mysqli_query($conexao,$mostra) or die (mysqli_error($mostra));
$anuncia = mysqli_fetch_assoc($exibe);


?>


<form method="post" action="alteracorbanco.php">
 <label> Digite a cor: </label>
 <input type="hidden" value="<?php echo $anuncia['idCor']; ?>" name="idCor">
 <input type="text" value="<?php echo $anuncia['nomeCor']; ?>" name="nomeCor"/>
 <input type="submit" value="Alterar"/>
</form>

<footer>
	©2016 LFDJS PRODUCTIONS
</footer>