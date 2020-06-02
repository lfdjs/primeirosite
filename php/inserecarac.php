<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>
<body>

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

$nomeModelo = $_POST["nomeModelo"];
$nomeDescricao = $_POST["nomeDescricao"];
$nomeCor = $_POST["nomeCor"];
$inserecarac = "insert into caracteristica(idModelo, idDescricao, idCor) values ('$nomeModelo', '$nomeDescricao', '$nomeCor')";

mysqli_query($conexao,$inserecarac) 
or die 
("Erro ao inserir a caractersística do carro
	<audio autoplay>
 <source src='../audio/errou.wav' type='audio/wav'>
 Seu navegador não suporta html 5
 </audio>
	<br><br>
	".mysqli_error($inserecarac)
	);

echo("Característica incluida com sucesso!<br>
	<audio autoplay>
        <source src='../audio/acertoumizeravi.wav' type='audio/wav'>
</audio>
<a href='../inserecarac'>Inserir nova Caracteristica</a>
");

?>
</body>

<footer align="center">
	©2016 LFDJS PRODUCTIONS
	</footer>