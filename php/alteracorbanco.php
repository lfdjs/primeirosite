<head>
	<meta charset="UTF-8">
	<title>Você conseguiu</title>
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

$idCor = $_POST["idCor"];
$nomeCor = $_POST["nomeCor"];
$mostra = "update cor set nomeCor = '$nomeCor' where idCor ='$idCor'";
$exibe = mysqli_query($conexao,$mostra) or die (mysqli_error($mostra));

echo("
	<audio autoplay>
        <source src='../audio/acertoumizeravi.wav' type='audio/wav'>
</audio>
");

echo ("
	<img align='right' src='../img/vaultboy.png'>
	<script>
	 alert('Cor $nomeCor alterada com sucesso!');
	 window.location='../exibircor';
	</script>

	");

?>
<br>
<br>
<br>

	<a href="exibircor.php">Voltar a tela de cores</a>


<footer>
	©2016 LFDJS PRODUCTIONS
</footer>