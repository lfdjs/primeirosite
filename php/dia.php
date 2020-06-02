<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/style.css"/>



<?php


$diasemana = $_POST["diasemana"];

if ($diasemana==1){
	echo("O dia da semana escolhido é domingo");
} else if ($diasemana==2){
	echo("O dia da semana escolhido é segunda");
} else if ($diasemana==3){
	echo("O dia da semana escolhido é terça");
} else if ($diasemana==4){
	echo("O dia da semana escolhido é quarta");
} else if ($diasemana==5){
	echo("O dia da semana escolhido é quinta");
} else if ($diasemana==6){
	echo("O dia da semana escolhido é sexta");
} else if ($diasemana==7){
	echo("O dia da semana escolhido é sábado");
}

?>
<a href="../diasemana">Escolher outro dia da semana</a>



