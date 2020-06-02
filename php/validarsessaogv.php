<?php
ob_start();
		if(isset($_COOKIE["cpf_pessoa"]));
			$cpf_pessoa = $_COOKIE["cpf_pessoa"];

		if(isset($_COOKIE["senha_pessoa"]));
			$senha_pessoa = $_COOKIE["senha_pessoa"];

		if(isset($_COOKIE["perfil_pessoa"]));
			$perfil_pessoa = $_COOKIE["perfil_pessoa"];

		if(isset($_COOKIE["nome_pessoa"]));
			$nome_pessoa = $_COOKIE["nome_pessoa"];


			//echo($senha_pessoa.$cpf_pessoa.$perfil_pessoa.$nome_pessoa);

		if(!(empty($cpf_pessoa) or (empty($senha_pessoa)))){
	//include("conecta.php");
	//include("conecta2.php");
include("conectaserv.php");

			$sql = "select * from pessoas where cpf = '$cpf_pessoa' and senha = '$senha_pessoa' and (idPerfil = '1' or idPerfil='2'";

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




/*echo("
	<audio autoplay>
        <source src='../audio/acertoumizeravi.wav' type='audio/wav'>
	</audio>");
echo("Total de linha: ".$total);
echo("<br>");*/
//echo("Login: ".$associa["cpf"]);
//echo("<br>");
//echo("Senha: ".$associa["senha"]);

if($total ==0 ) {
setcookie("cpf_pessoa");
setcookie("nome_pessoa");
setcookie("perfil_pessoa");
setcookie("senha_pessoa"); 
	echo ("
		<script>
			alert('Area Restrita, Faça o login como gerente ou vendedor para acesar a página');
			window.location = '../login_senha/logingv.php';
		</script>


		");
	exit;
//echo $associa["cpf"].$associa["senha"].$associa["idPerfil"];
}

		} 

		else

		 {
		 	echo ("
		 		<script>
			alert('Area restrita');
			window.location = '../login_senha/logingv.php';
		</script>
		 		");
		 	exit;
echo ("-----");

		}
	
echo ("-----");

?>