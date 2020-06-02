<?php
include("../php/validarsessao.php");
?>
 <head>
 	<meta charset="UTF-8">
  <title>Exibe pessoa</title>
  <link rel="stylesheet" type="text/css" href="../css/pessoas.css">
 </head>
 <h1 align="center">Pessoas cadastradas</h1>
 <body>
 	<center>
 	

	<table border="1">
	<tr> 
		<td>CPF </td>
		<td>Nome</td>
		<td>Sobrenome</td>
		<td>Celular</td>
		<td>Fixo</td>
		<td>Sexo</td>
		<!--<td>Senha</td>-->
		<td>Data de Nascimento </td>
		<td>Estado Civil</td>
		<td>E-Mail</td>
		<td>Codigo de Perfil</td>
		<td> Acao </td>
	</tr>
	<?php
	//include("../php/conecta.php");
	//include("../php/conecta2.php");
	include("../php/conectaserv.php");
	
	$local= "fdb14.biz.nf";
	$usuario = "2011625_lfdjs";
	$senhabanco = "09silva10lfdjs1991luiz";
	$banco = "2011625_lfdjs";

	$conexao = mysqli_connect ($local,$usuario,$senhabanco) or die ("Erro ao conectar ao banco de dados<br>".mysqli_error($conexao));
	mysqli_select_db($conexao,$banco) or die ("<br>Erro ao selecionar ao banco de dados<br>".mysqli_error($conexao));
	$mostra = "select * from pessoas order by cpf asc;" ;
	$exibe = mysqli_query($conexao,$mostra) or die("Impossível exibir Pessoa".mysqli_error($mostra));
	while($anuncia = mysqli_fetch_assoc($exibe)){
	echo("<tr>
		<td>".$anuncia['cpf']."</td>
		<td>".$anuncia['nomePessoa']."</td>
		<td>".$anuncia['sobrenomePessoa']."</td>
		<td>".$anuncia['telCelular']."</td>
		<td>".$anuncia['telFixo']."</td>
		<td>".$anuncia['sexo']."</td>
		<!--<td>".$anuncia['senha']."</td>-->
		<td>".$anuncia['dtNasc']."</td>
	    <td>".$anuncia['estadoCivil']."</td>
		<td>".$anuncia['email']."</td>
	    <td>".$anuncia['idPerfil']."</td>
		<td><a href='../php/editapessoa.php?id=$anuncia[cpf]'>Editar</a></td></tr>");
	}
	?>
</table>

</body>
<br><br><br>
<a href="../formulario" align="center">Inserir novo cadastro</a>
<br><br>
<a href="../" align="center">Voltar a página inicial</a>
<br><br><br>
<footer align="center">
©2016 LFDJS PRODUCTIONS
</footer>


