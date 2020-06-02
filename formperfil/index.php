<?php
 include ("../php/validarsessao.php");
echo ("Olá ".$_SESSION["nome_pessoa"]);
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
		<title>Cadastro de Perfil</title>
		</head>
	
<body>
	<form method="post" action="../php/cadastraperfil.php">
		Insira um Perfil:
		<input type="text" required name="nomePerfil"/>
		<input type="submit" name="Cadastrar Perfil"/>
		<input type="reset" name="Limpar"/>
		</form>
		<br>
		<a href="../">Voltar à página principal</a>
</body>
<br><br>
<footer>©2016 LFDJS PRODUCTIONS</footer>
</html>
