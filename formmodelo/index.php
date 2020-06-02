<?php
	include("../php/validarsessao.php");
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Inserir modelo</title>
		</head>
	<style>

	form {
		color: red;
		border-radius: 10px;
		border: red;

	}
	</style>
<body>
	<form method="post" action="../php/cadastramodelo.php">
		Insira um modelo:
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