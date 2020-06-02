<title>Conectar com o banco</title>
<?php
$local= "localhost";
$usuario = "lfdjs";
$senha = "lfdjs091091";

$con = mysqli_connect ($local,$usuario,$senha);
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
