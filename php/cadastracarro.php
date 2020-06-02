<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/acessgranted.css" />

<?php
	//include("conecta.php");
	//include("conecta2.php");
include("conectaserv.php");
//variáveis recebidas das opções

$idCarac = $_POST["idCarac"];
$chassi = $_POST["chassi"];
$preco = $_POST["preco"];
$situacao = $_POST["d"];

//mensagem de confirmação



echo("O chassi inserido é: ".$chassi."<br>");
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

$insere = "insert into carro (idCarac, chassi, preco, situacao) values ('$idCarac','$chassi','$preco','$situacao')";
mysqli_query($conexao,$insere) or die ("Registro não inserido<br>
<audio autoplay>
 <source src='../audio/errou.wav' type='audio/wav'>
 Seu navegador não suporta html 5
 </audio>
    <img align='right' src='../img/vaultboynegative.png'></img>
    ".mysqli_error($insere));

echo("<img align='right' src='../img/vaultboy.png'>");
echo("
	<script>
		alert('Chassi de número $chassi inserido com sucesso');
	window.location= '../cadastrocarro';
	</script>");


?>

<a href="../cadastrocarro" align="center">Voltar ao menu de inserção de chassi