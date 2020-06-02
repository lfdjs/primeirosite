<?php
	//include("conecta.php");
	//include("conecta2.php");
include("conectaserv.php");

$local= "fdb14.biz.nf";
$usuario = "2011625_lfdjs";
$senhabanco = "09silva10lfdjs1991luiz";
$banco = "2011625_lfdjs";
$login = $_POST["login"];
$senha = $_POST["senha"];

$conexao = mysqli_connect ($local,$usuario,$senhabanco) or die ("Erro ao conectar ao banco de dados<br>".mysqli_error());
mysqli_select_db($conexao,$banco) or die ("<br>Erro ao selecionar ao banco de dados<br>".mysqli_error());
$consulta = "select * from pessoas where cpf ='$login' and senha = '$senha' and idPerfil= '1'";
$query = mysqli_query ($conexao,$consulta) or die ("Consulta falhou<br>".mysqli_error($conexao));
$associa = mysqli_fetch_assoc($query);
$total = mysqli_num_rows($query);
 

  if ($total ==0 ) { 
	echo ("
		<script>
			alert ('Login ou Senha incorreto');
			window.location = '../login_senha';
		</script>
	
	");
  }
  
  else {
	  session_start();
	  $_SESSION["cpf_pessoa"] = $login;
	  $_SESSION["senha_pessoa"] = $senha;
	  $_SESSION["perfil_pessoa"] = $associa["idPerfil"];
	  $_SESSION["nome_pessoa"] = $associa["nomePessoa"];
	echo ("
		<script>
			alert ('Login realizado com sucesso');
			window.location = '../php/bemvindo.php';
		</script>
	 "); 
	
  }
 ?>