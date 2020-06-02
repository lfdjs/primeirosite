<?php

/*
<?php
include ("conecta.php");

$login = $_POST["login"];
$senha = $_POST["senha"];
 
 $sql = "select * from pessoa where 
 cpf ='$login' and senha = '$senha' 
 and codPerfil= '1'";
 $query = mysqli_query ($sql) or die ("Consulta falhou".mysqli_error());
 $associa = mysqli_fetch_assoc($query);
 $total = mysqli_num_rows($query);
 

  if ($total ==0 ) { 
	echo ("
		<script>
			alert ('Login ou Senha incorreto');
			window.location = 'login.html';
		</script>
	
	");
  }
  
  else {
	  setcookie("cpf_pessoa",$login);
	  setcookie("senha_pessoa",$senha);
	  setcookie("perfil_pessoa",$associa["codPerfil"]);
	  setcookie("nome_pessoa",$associa["nome"]);
	echo ("
		<script>
			alert ('Login realizado com sucesso');
			window.location = 'bemvindo.php';
		</script>
	 "); 
	
  }
 ?>

*/
	include("conecta.php");
//include("conectaserv.php");


$login = $_POST["login"];
$senha = $_POST["senha"];
//&& é and
//|| é or

$sql = "select * from pessoas where cpf ='$login' and senha ='$senha' and (idPerfil ='1' or idPerfil ='2'";

$query = mysqli_query($sql) 
or die 
("Não foi possivel logar no sistema
	<br>
	".mysqli_error().
	"
	<audio autoplay>
 		<source src='../audio/errou.wav' type='audio/wav'>
 		Seu navegador não suporta html 5
 	</audio>
	");

$associa = mysqli_fetch_assoc($query);
$total = mysqli_num_rows($query);

/*
/acertoumizeravi.wav' type='audio/wav'>
	</audio>");
echo("Total de linha: ".$total);
echo("<br>"); */
//echo("Login: ".$associa["cpf"]);
//echo("<br>");
//echo("Senha: ".$associa["senha"]);

if($total ==0 ) {
	echo ("
		<script>
			alert('Login ou Senha Inválidos');
			window.location = '../login_senha/index.html';
		</script>


		");
}
else {
	setcookie("cpf_pessoa",$login);
	setcookie("senha_pessoa",$senha);
	setcookie("perfil_pessoa",$associa['idPerfil']);
	setcookie("nome_pessoa",$associa['nomePessoa']);
	echo ("
		<script>
			//alert('Login Realizado com sucesso!');
			window.location = '../php/bemvindo.php';
		</script>


		");

//echo ("oioioi: ".$_COOKIE["nome_pessoa"]);
}

/*if (($login == 123) && ($senha == 123)){
	echo ("Login realizado com sucesso");
} else {
	echo ("O Login ou a senha está incorreto(a)");
}*/

?>