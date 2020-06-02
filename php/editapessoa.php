
 <head>
  <title>Editar Pessoa</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="../css/pessoas.css">
 </head>
 <h1 align="center">
 	Alterar dados
 </h1>
 <body>
 	
 	<fieldset>

	<?php
	//include("conecta.php");
	//include("conecta2.php");
include("conectaserv.php");

	$cpf= $_GET["id"];

	$mostra = "select * from pessoas where cpf='$cpf';";
	$exibe = mysqli_query($mostra) or die("Impossível exibir a Descricao selecionada".mysqli_error());
	$anuncia = mysqli_fetch_assoc($exibe);

	?>

<form method="POST" action="updatepessoa.php">
CPF:<input type="text" name="cpf" placeholder="cpf" value="<?php echo $anuncia['cpf'];?>"></input><br>
Nome:<input type="text" name="nomePessoa" placeholder="Nome" value="<?php echo $anuncia['nomePessoa'];?>"></input><br>
Sobrenome:<input type="text" name="sobrenomePessoa" placeholder="Sobrenome" value="<?php echo $anuncia['sobrenomePessoa'];?>"></input><br>
Cod de Perfil:<input type="text" name="idPerfil" placeholder="Codigo de Perfil" value="<?php echo $anuncia['idPerfil'];?>"></input><br>
Telefone Cel:<input type="text" name="telCelular" placeholder="Fixo" value="<?php echo $anuncia['telCelular'];?>"></input><br>
Telefone Fixo:<input type="text" name="telFixo" placeholder="Fixo" value="<?php echo $anuncia['telFixo'];?>"></input><br>
Sexo:<input type="text" name="sexo" placeholder="Fixo" value="<?php echo $anuncia['sexo'];?>"></input><br>
Senha:<input type="password" name="senha" placeholder="Fixo" value="<?php echo $anuncia['senha'];?>"></input><br>
Data Nascimento:<input type="date" name="dtNasc" placeholder="Senha" value="<?php echo $anuncia['dtNasc'];?>"></input><br>
Estado Civil:<input type="text" name="estadoCivil" placeholder="Estado Civil" value="<?php echo $anuncia['estadoCivil'];?>"></input><br>
E-mail:<input type="text" name="email" placeholder="E-mail" value="<?php echo $anuncia['email'];?>"></input><br><br>
	<input type="submit" value="Salvar Dados"></input>
</form>

</fieldset>
</body>
<br><br><br>
<center>
    <footer align="center">
©2016 LFDJS PRODUCTIONS
</footer>
</center>
