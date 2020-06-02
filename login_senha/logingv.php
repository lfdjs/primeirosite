<html>
	<head>
		<title>Login e senha do gerente</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
	</head>
	<header>
		Seja muito bem vindo jovem Mizeravi!
	</header>
	<br>
<body>
	<form name="login_senha " method="post" action="../php/validaacessogerente.php">
		Digite seu login:
		<br>
		<input name="login" type="text"> </input>
		<br>
		<br>
		Digite sua senha:
		<br>
		<input name="senha" type="password"></input>
		<br>
		<br>
		<input type="image" value="Acessar" name="Acessar" src="../img/acessar.gif"></input>
		<br>
		</form>
</body>
<footer>
	©2016 LFDJS PRODUCTIONS
	</footer>
</html>

<!--
	<HEAD>
 <TITLE>Formulário de login do gerente</TITLE>
</HEAD>
<BODY>
  <form method="POST" action="validaacessogerente.php">
   Login:<input type="text" name="login">
   Senha:<input type="password" name="senha">
   <input type="submit" value="Logar">
</form>
</BODY>
</HTML>
