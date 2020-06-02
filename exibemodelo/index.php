<?php
	include("../php/validarsessao.php");
?>
<head>
	<meta charset="UTF-8">
	<title>Exibir Modelo</title>
	<link rel="stylesheet" type="text/css" href="../css/tables.css" />
	<script type='text/javascript' src='../js/javascript.js'></script>
</head>

<center>
	<body>
<?php
//Include("../php/conecta.php");
//Include("../php/conecta2.php");
Include("../php/conectaserv.php");

$local= "fdb14.biz.nf";
$usuario = "2011625_lfdjs";
$senhabanco = "09silva10lfdjs1991luiz";
$banco = "2011625_lfdjs";

$conexao = mysqli_connect ($local,$usuario,$senhabanco) or die ("Erro ao conectar ao banco de dados<br>".mysqli_error($conexao));
mysqli_select_db($conexao,$banco) or die ("<br>Erro ao selecionar ao banco de dados<br>".mysqli_error());
$mostra = ("select * from modelo");
$exibe = mysqli_query($conexao,$mostra) or die ("Erro na consulta ".mysql_error($mostra));
 echo ("
 	<table>
 	<th colspan='4'>
 		<font color='red'>Modelos</font>
 	</th> 
 	<tr>
 	<td>Nome Modelo</td>
 	<td>ID Modelo</td>
 	<td colspan='2' align='center'>Ação</td>
 	");
while ($anuncia = mysqli_fetch_assoc($exibe)){
echo ("
	<tr>
		<td>".$anuncia['nomeModelo']."</td>
		<td>".$anuncia['idModelo']."</td>
		<td>
			<a href='../php/alteramodelo.php?id=$anuncia[idModelo]'>Alterar</a>
		</td>
		<td>
			<a href='../php/excluimodelo.php?id=$anuncia[idModelo]' onclick='return decisao();'>Excluir</a> 
		</td>
	</tr>
		"
		);
}
echo ("</table>");





?>
<br>
<br>
<a href="../">Página inicial</a>
</body>
<br>
<br>
<footer>
	©2016 LFDJS PRODUCTIONS
</footer>