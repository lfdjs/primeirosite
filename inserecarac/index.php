<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>

	<h1 align="center">
		Cadastro de caracteristica do carro
	</h1>
<body align="center">
	

	<?php
    include("../php/validarsessao.php");
    //include("../php/conecta2.php");
	//include("../php/conecta.php");
    include("../php/conectaserv.php");
    
    //conexão com o banco de dados e ações do php
	$local= "fdb14.biz.nf";
	$usuario = "2011625_lfdjs";
	$senhabanco = "09silva10lfdjs1991luiz";
	$banco = "2011625_lfdjs";

	$conexao = mysqli_connect ($local,$usuario,$senhabanco) or die ("Erro ao conectar ao banco de dados<br>".mysqli_error($conexao));
	mysqli_select_db($conexao,$banco) or die ("<br>Erro ao selecionar ao banco de dados<br>".mysqli_error($banco));

	$mostramodelo = "select * from modelo";
	$mostradescricao = "select * from descricao";
	$mostracor = "select * from cor";
	$exibemodelo = mysqli_query($conexao,$mostramodelo) or die ("Impossível exibir modelo".mysqli_error($mostramodelo));
	$exibedescricao = mysqli_query($conexao,$mostradescricao) or die ("Impossível exibir descricao".mysqli_error($mostradescricao));
	$exibecor = mysqli_query($conexao,$mostracor) or die ("Impossível exibir cor".mysqli_error($mostracor));

	/*
include("../php/conecta.php");

			$mostra = "select * from perfil order by nomePerfil asc" ;
			$exibe = mysqli_query($mostra) or die ("Impossível exibir perfil".mysqli_error());

			while ($anuncia = mysqli_fetch_assoc($exibe)){
				echo("
					<option value=".$anuncia['idPerfil']."> ".$anuncia['nomePerfil']." </option>");
					
				}

			?>

	*/
			echo("<form method='post' action='../php/inserecarac.php'>");
			echo("Modelo <select name='nomeModelo' required>");
            echo("<option></option>");
	while ($anuncia = mysqli_fetch_assoc($exibemodelo)){
	echo("				
					
			<option value=".$anuncia['idModelo']." >".$anuncia['nomeModelo']."</option>");
		}
		echo("</select>");
		echo("Descrição <select name='nomeDescricao' required>");
        echo("<option></option>");
	while ($anuncia = mysqli_fetch_assoc($exibedescricao))
        {
	       echo("
            <option value=".$anuncia['idDescricao']." >".$anuncia['nomeDescricao']."</option>");
		}
		      echo("</select>");
		      echo("Cor <select name='nomeCor' required>");
              echo("<option></option>");
	while ($anuncia = mysqli_fetch_assoc($exibecor)){
	echo("	
		
			<option value=".$anuncia['idCor']." >".$anuncia['nomeCor']."</option>");
		}
		echo("</select>");
		
		echo("
			<input type='submit' value='Registrar'></input>
			<input type='reset' value='Limpar'></input>
			");



		echo("</form>");



	?>

</body>


<footer align="center">
	©2016 LFDJS PRODUCTIONS
	</footer>