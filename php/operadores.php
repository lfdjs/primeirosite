<meta charset="UTF-8">
<?php

/* Comentário em bloco
$x = $_POST["num1"];
$y = $_POST["num2"];

if ($x > $y){
	echo ("O número ".$x." é o maior");
	echo ("<br>O Número ".$y." é o menor");
} else if ($x < $y){
	echo ("O número ".$y." é o maior");
	echo ("<br>O Número ".$x." é o menor");
} else {
	echo ("Os números ".$x." são iguais.");
}*/

//comentário em uma linha

$login = $_POST["login"];
$senha = $_POST["senha"];
//&& é and
//|| é and
if (($login == 123) && ($senha == 123)){
	echo ("Login realizado com sucesso");
} else {
	echo ("O Login ou a senha está incorreto(a)");
}

?>