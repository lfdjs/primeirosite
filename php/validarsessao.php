<head>
	<meta charset="UTF-8">
 <!--<link rel="stylesheet" type="text/css" href="../css/paginainicial.css" />-->
</head>
<?php
@session_start();
//ob_start();
		if(IsSet($_SESSION["cpf_pessoa"])){
			$cpf_pessoa = $_SESSION["cpf_pessoa"];
		}
		if(IsSet($_SESSION["senha_pessoa"])){
			$senha_pessoa = $_SESSION["senha_pessoa"];
		}
		if(IsSet($_SESSION["perfil_pessoa"])){
			$perfil_pessoa = $_SESSION["perfil_pessoa"];
		}
		
		if(IsSet($_SESSION["nome_pessoa"])){
			$nome_pessoa = $_SESSION["nome_pessoa"];
		}
		if(!(empty($cpf_pessoa) or empty($senha_pessoa))){
			
            //include ("conecta.php");
            //include ("conecta2.php");
            //include ("conectaserv.php");

$local= "fdb14.biz.nf";
$usuario = "2011625_lfdjs";
$senhabanco = "09silva10lfdjs1991luiz";
$banco = "2011625_lfdjs";

$conexao = mysqli_connect ($local,$usuario,$senhabanco) or die ("Erro ao conectar ao banco de dados<br>".mysqli_error($conexao));
mysqli_select_db($conexao,$banco) or die ("<br>Erro ao selecionar ao banco de dados<br>".mysqli_error());
$consulta = "select * from pessoas where cpf ='$cpf_pessoa' and senha = '$senha_pessoa' and idPerfil= '1'";
$query = mysqli_query ($conexao,$consulta) or die ("Consulta falhou<br>".mysqli_error($consulta));
$associa = mysqli_fetch_assoc($query);
$total = mysqli_num_rows($query);
 
  if ($total ==0 ) { 
	@session_start();
	session_unset();
	session_destroy();
	echo ("
		<script>
			alert('Area restrita 1');
			window.location = '../login_senha';
		</script>
	
	");
	exit;
  }		
	} else
			
		{
			echo ("
				<script>
				alert('Area restrita 2.');
				window.location = '../login_senha';
				</script>
				");
			exit;	
		}

?>