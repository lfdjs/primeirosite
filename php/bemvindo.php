<?php
 include ("validarsessao.php");
echo ("Olá ".$_SESSION["nome_pessoa"]);

?>

<html>
	<head>
		<title>New document</title>
		<meta charset="UTF-8">
	</head>
<body>
	<h1>Seja bem vindo Mizeravi</h1>
	<br><br><br>
	<a href="../php/loginsair.php"><input type='button' value='sair'/></a>
</body>
</html>
	