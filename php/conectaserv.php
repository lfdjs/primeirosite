<?php
$local= "localhost";
$usuario = "root";
$senha = "1234";
$banco = "website";

$con = mysqli_connect ($local,$usuario,$senha) or die ("Erro ao conectar ao banco de dados<br>".mysqli_error());
	/*if (!$con) {
		die ("Erro ao conectar ao banco de dados<br>".mysqli_error());
	} else {
		echo ("<br>Banco de dados conectatdo com sucesso<br>");
	}*/
$sel =	mysqli_select_db($con,$banco) or die ("<br>Erro ao selecionar ao banco de dados<br>".mysqli_error());
    /*if (!$sel) {
		die ("<br>Erro ao selecionar ao banco de dados<br>".mysqli_error());
	} else {
		echo ("<br>Banco de dados selecionado com sucesso<br>");
	}*/

?>