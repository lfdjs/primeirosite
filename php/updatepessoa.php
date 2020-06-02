<head>
	<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/pessoas.css">
<audio autoplay>
        <source src="../audio/acertoumizeravi.wav" type="audio/wav">
</audio>
</head>
<?php
  //include("conecta.php");
  //include("conecta2.php");
include("conectaserv.php");

$cpf = $_POST["cpf"];
$nomePessoa = $_POST["nomePessoa"];
$sobrenomePessoa = $_POST ["sobrenomePessoa"];
$idPerfil = $_POST["idPerfil"];
$telCelular = $_POST["telCelular"];
$telFixo = $_POST["telFixo"];
$sexo = $_POST["sexo"];
$senha = $_POST["senha"];
$dtNasc = $_POST["dtNasc"];
$estadoCivil = $_POST["estadoCivil"];
$email = $_POST["email"];



$edita = "update pessoas 
 set 
  cpf = '$cpf',
  nomePessoa = '$nomePessoa',
  sobrenomePessoa = '$sobrenomePessoa',
  idPerfil = '$idPerfil',
  telCelular = '$telCelular',
  telFixo = '$telFixo',
  sexo = '$sexo',
  senha = '$senha',
  dtNasc = '$dtNasc',
  estadoCivil = '$estadoCivil',
  email = '$email' 
 where cpf = '$cpf';";

mysqli_query("$edita") or die("Registro não inserido!<br><br>".mysqli_error());

?>
<center>
<body align="center">
	Os Dados foram alterados com sucesso!
    <img size="3" src="../img/vaultboy.png"/>
    <br>
    <a href="../pessoas" align="center">Voltar a tabela de pessoas cadastradas</a>
    </body>
<br>

</center>

<br><br>
<center>
    <footer align="center">
©2016 LFDJS PRODUCTIONS
</footer>
</center>
