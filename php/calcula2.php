<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/style.css"/>


<?php
$num1 = $_POST["num1"];
$operador = $_POST["operador"];
$num2 = $_POST["num2"];

switch ($operador) {
	case "+": $total= $num1 + $num2;
	echo("A soma de ".$num1." com ".$num2." é: ".$total);
	break;
	case "-": $total= $num1 - $num2;
	echo ("A subtração de ".$num1." com ".$num2." é: ".$total);
	break;
	case "*": $total= $num1 * $num2;
	echo ("A multiplicação de ".$num1." com ".$num2." é: ".$total);
	break;
	case "/": $total= $num1 / $num2;
	echo ("A divisão de ".$num1." com ".$num2." é: ".$total);
	break;
	case "%": $total= $num1 * $num2 / 100;
	echo ($num1."% de ".$num2." é ".$total);
	break;
	case "√¯":$total = sqrt($num1);
	echo (" A raiz Quadrada de ".$num1." é ".$total);
	break;

}



?>