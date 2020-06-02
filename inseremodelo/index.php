<?php
include("../php/validarsessao.php");
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
		<title>Cadastro de Modelo</title>
		</head>
<body>
	<form method="post" action="../php/cadastramodelo.php">
		Insira um modelo de carro:
		<input type="text" required name="nomeModelo"/>
		<input type="submit" name="Cadastrar Modelo"/>
		<input type="reset" name="Limpar"/>
		</form>
		<br>
		<a href="../">Voltar à página principal</a>
</body>
<br><br>
<footer>©2016 LFDJS PRODUCTIONS</footer>
</html>