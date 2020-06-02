<head>
	<meta charset="UTF-8">
	<title>Exibir Cor</title>
	<link rel="stylesheet" type="text/css" href="../css/tables.css" />
	<script type='text/javascript' src='../js/javascript.js'></script>
</head>

<center>
	<body>
<?php
	//include("conecta.php");
	//include("conecta2.php");
include("conectaserv.php");

$mostra = ("select * from cor");
$exibe = mysqli_query($mostra);
 echo ("
 	<table>
 	<th colspan='4'>
 		<font color='red'>Cores</font>
 	</th> 
 	<tr>
 	<td>Nome Cor</td>
 	<td>ID Cor</td>
 	<td colspan='2' align='center'>Ação</td>
 	");
while ($anuncia = mysqli_fetch_assoc($exibe)){
echo ("
	<tr>
		<td>".$anuncia['nomeCor']."</td>
		<td>".$anuncia['idCor']."</td>
		<td>
			<a href='../php/alteracor.php?id=$anuncia[idCor]'>Alterar</a>
		</td>
		<td>
			<a href='../php/excluircor.php?id=$anuncia[idCor]' onclick='return decisao();'>Excluir</a> 
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