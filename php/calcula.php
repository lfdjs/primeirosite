
<Meta charset="utf-8">

<?php

$num1 = $_POST["num1"];
$operador = $_POST["operador"];
$num2 = $_POST["num2"];


//echo ("Número 1: ".$num1."<br> Número 2: ".$num2. "<br>Operador: ".$operador );

  if ($operador=="+") {
	$total= $num1 + $num2;
    echo("A soma de ".$num1." com ".$num2." é: ".$total);
} else if ($operador=="-"){
	$total= $num1 - $num2;
	echo ("A subtração de ".$num1." com ".$num2." é: ".$total);
} else if ($operador=="*"){
	$total= $num1 * $num2;
	echo ("A multiplicação de ".$num1." com ".$num2." é: ".$total);
} else if ($operador=="/"){
	$total= $num1 / $num2;
	echo ("A divisão de ".$num1." com ".$num2." é: ".$total);
} else if ($operador=="%"){
	$total= $num1 * $num2 / 100;
	echo ($num1."% de ".$num2." é ".$total);
} else if ($operador=="√¯") {
	$total = sqrt($num1);
	echo (" A raiz Quadrada de ".$num1." é ".$total);
}

?>
<br>
<a href="/lfdjs.co.nf/calculadora.html"> Novo Cálculo</a>

