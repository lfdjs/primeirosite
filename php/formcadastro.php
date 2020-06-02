<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/acessgranted.css">

<body>

<?php

				//Variáveis de inserção dos dados no formulário

//Dados Pessoais
$idPerfil = $_POST["perfil"];
$nomePessoa = $_POST["nomePessoa"];
$sobrenomePessoa = $_POST["sobrenomePessoa"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$telFixo = $_POST["telFixo"];
$telCelular = $_POST["telCelular"];
$sexo = $_POST["sexo"];
$estadoCivil = $_POST["estadoCivil"];
$dtNasc = $_POST["dtNasc"];
$login = $_POST["login"];
$senha = $_POST["senha"];

//Endereço
$cep = $_POST["cep"];
$logradouro = $_POST["logradouro"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];


			//Variáveis de inserção no banco de dados

$inserepessoas = "insert into pessoas 
	(nomePessoa, sobrenomePessoa, cpf, email, telFixo, telCelular, sexo, 
	estadoCivil, dtNasc, idPerfil, login, senha) 
values 
	('$nomePessoa','$sobrenomePessoa','$cpf','$email','$telFixo','$telCelular',
		'$sexo','$estadoCivil','$dtNasc','$idPerfil', '$login','$senha' )";

$insereendereco = "insert into endereco
	(cpf, cep, logradouro, numero, complemento, bairro, cidade, uf )
	values
	('$cpf', '$cep','$logradouro','$numero','$complemento','$bairro','$cidade','$uf')";


//Conexão com o banco de dados
	//include("conecta.php");
	//include("conecta2.php");
include("conectaserv.php");

//Conexão com o banco de dados
$local= "fdb14.biz.nf";
$usuario = "2011625_lfdjs";
$senhabanco = "09silva10lfdjs1991luiz";
$banco = "2011625_lfdjs";

$conexao = mysqli_connect ($local,$usuario,$senhabanco) or die ("Erro ao conectar ao banco de dados<br>".mysqli_error($conexao));
mysqli_select_db($conexao,$banco) or die ("<br>Erro ao selecionar ao banco de dados<br>".mysqli_error($conexao));


			//Inserção dos dados no banco de dados

//Inserção dos dados pessoais
mysqli_query($conexao,$inserepessoas) 
or die 
("Erro ao Inserir os dados pessoais<br> "
	.mysqli_error($inserepessoas).
 "<br>
 <audio autoplay>
 <source src='../audio/errou.wav' type='audio/wav'>
 Seu navegador não suporta html 5
 </audio>
 <img align='right' src='../img/vaultboynegative.png'></img>
 ");

//Inserção do endereço
mysqli_query($conexao,$insereendereco)
 or die 
 ("Erro ao Inserir o endereço<br>  "
 	.mysqli_error($insereendereco).
 "<br>
 <audio autoplay='autoplay'>
 <source src='../audio/errou.wav' type='audio/wav'>
 Seu navegador não suporta html 5
 </audio>
 <img align='right' src='../img/vaultboynegative.png'></img>
 ");


echo ("Dados inseridos com sucesso<br>
	<audio autoplay>
        <source src='../audio/acertoumizeravi.wav' type='audio/wav'>
</audio>
	<img align='right' src='../img/vaultboy.png'>"
	);
echo (
	"<br>
	 <br>
	 <a href='../pessoas'>Continuar para o site</a>
	 ");
?>
</body>