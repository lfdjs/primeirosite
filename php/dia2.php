<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/style.css"/>

<?php


$diasemana = $_POST["diasemana"];

switch ($diasemana) {
	case 1: 
	echo("O dia da semana escolhido é domingo");
	break;
	case 2: 
	echo("O dia da semana escolhido é segunda");
	break;
	case 3: 
	echo("O dia da semana escolhido é terça");
	break;
	case 4; 
	echo("O dia da semana escolhido é quarta");
	break;
	case 5: 
	echo("O dia da semana escolhido é quinta");
	break;
	case 6: 
	echo("O dia da semana escolhido é sexta");
	break;
	case 7: 
	echo("O dia da semana escolhido é sábado");
	break;
}

?>
<br>
<a href="../diasemana">Escolher outro dia da semana</a>



