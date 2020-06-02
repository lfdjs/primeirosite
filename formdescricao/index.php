<?php
	include("../php/validarsessao.php");
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
		<title>Cadastro de descrição</title>
		</head>
	<style>

	form {
		color: red;
		border-color: red;
		border-radius: 10px;
		

	}
	</style>
<body>
	<form method="post" action="../php/cadastradescricao.php">
		Insira uma Descrição:
		<input type="text" required name="nomeDescricao"/>
		<input type="submit" name="Cadastrar Descricão"/>
		<input type="reset" name="Limpar"/>
		</form>
		<br>
		<a href="../">Voltar à página principal</a>
</body>
<br><br>
<footer>©2016 LFDJS PRODUCTIONS</footer>
</html>
