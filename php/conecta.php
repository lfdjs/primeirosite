<?php
$local= "localhost";
$usuario= 'root';
$senha= "senac";

$con = mysqli_connect ($local,$usuario,$senha) or die (`Erro`.mysqli_error());

	if (!$con) {
		die ("Erro ao conectar ao banco de dados<br>".mysqli_error());
	} /*else {
		echo ("<br>Banco de dados conectatdo com sucesso<br>");
	}*/
 $sel =	mysqli_select_db("lfdjs");
    if (!$sel) {
		die ("<br>Erro ao selecionar ao banco de dados<br>".mysqli_error());
	} /*else {
		echo ("<br>Banco de dados selecionado com sucesso<br>");
	}*/

?>