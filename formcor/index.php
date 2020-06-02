<?php
	include("../php/validarsessao.php");
?>
<html>
	<head>
		<title>Cadastro de cor</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	</head>
	<style>

	form {
		color: red;
		
		

	}
	</style>
	
<body>
	<form method="post" action="../php/cadastracor.php">
		Insira uma cor:
		<input type="text" required name="nomeCor"/>
		<input type="submit" name="Cadastrar Cor"/>
		<input type="button" onClick="alert('Quero \ncomida')"name="Cadastrar Cor"/>
		<input type="reset" name="Limpar"/>
		</form>

		<br>
		Nesta página temos uma demonstração de inserção de cores, integrando com uma página php.
		<br><br>
		Lembrando que este é um trabalho conceitual para fins de conhecimento e constante aprendizado, portanto caso queira deixar sua sugestão, avaliação ou dicas para melhoria do meu trabalho, <a href="mailto:lfdjs0000@gmail.com?subject=Sugestões para o site">clique aqui para encaminhar um e-mail</a>.
		<br><br>
		Desde já lhes agradeço!
	    <br><br>
		<a href="../">Voltar à página principal</a>
		<br><br> 
	
</body>

<footer>©2016 LFDJS PRODUCTIONS</footer>
</html>
