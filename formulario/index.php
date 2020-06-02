<?php

 include ("../php/validarsessao.php");
echo ("<h2 id='nomelogado'>Olá ".$_SESSION["nome_pessoa"]."</h2>");
echo("<a id='botaosair' href='../php/loginsair.php' align='right'><input type='button' value='Dar o fora daqui' align='right'></a>");
?>
<html>
<head>
	<title> Trabalhando com Formularios </title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/formstyle.css" />
	<script type='text/javascript' src='../js/jquery.js'></script>
    <script type='text/javascript' src='../js/javascript.js'></script>

</head>


<body>
	<h1>Teste de Formulário</h1>
	<h1>ATENÇÃO, ESTE FORMULÁRIO FAZ PARTE DO MEU TRABALHO CONCEITUAL DE DESENVOLVIMENTO DE SITES E APENAS TEM A FINALIDADE DE TESTES, POR FAVOR, NÃO COLOQUEM SEUS DADOS REAIS AQUI, CRIEM APENAS DADOS FICTÍCIOS</h1>
	<H1>ATTENTION, THIS FORM IS PART OF MY WEBSITE DEVELOPMENT CONCEPT WORK AND ONLY HAS THE PURPOSE OF TEST , PLEASE DO NOT PUT YOUR PERSONAL INFORMATION HERE .</H1>
	<form method="post" action="../php/formcadastro.php"> 
		<h3 class="formatarh3">Cadastro de Cliente</h3>
		<fieldset style="border: 5px outset white;"> <legend>Dados Pessoais</legend>
		<span>*</span><label>Nome:</label> <input type="text" maxlength="10" name="nomePessoa" size="20" required></input>
		<span>*</span><label>Sobrenome:</label> <input type="text" maxlength="30" name="sobrenomePessoa" size="20" required></input>
		<br>
		<br>
		<span>*</span><label>CPF:</label> <input type="text" name="cpf" maxlength="11" required placeholder="Digite o seu CPF"></input>
		<br>
		<br>
		<span>*</span><label>E-mail:</label> <input Type="email" maxlength="100" size="20" name="email" required></input>
		<br>
		<br>
		<span>*</span><label>Telefone fixo:</label> <input Type="text" maxlength="11" name="telFixo" size="11"></input>
		<span>*</span><label>Telefone Celular:</label>
		<input Type="text" maxlength="11" name="telCelular" size="11" required></input>
		
		<br>
		<br>

		<span>*</span><label>Sexo:</label> 
							<input type="radio" name="sexo" Value="M" required>M</input>
							<input type="radio" name="sexo" value="F" required>F</input>
		<br>
		<br>
		<span>*</span><label>Estado Civil:</label> 
					<input type="radio" name="estadoCivil" value="Solteiro" required>Solteiro(a)</input>	
					<input type="radio" name="estadoCivil" value="Casado" required>Casado(a)</input>
					<input type="radio" name="estadoCivil" value="divorciado" required>Divorciado(a)</input>
					<input type="radio" name="estadoCivil" value="uniaoEstavel" required>União Estavel(a)</input>
					<input type="radio" name="estadoCivil" value="viuvo" required>Viúvo(a)</input>
					<br>
					<br>
		<span>*</span><label>Data de Nascimento:</label> <input Type="date" size="20" name="dtNasc" required></input>
		<br>
		<br>
		<span>*</span><label>Perfil:</label> 
		<select name="perfil" required>
			<option/>
            	
			<?php

			//include("../php/conecta.php");
			//include("../php/conecta2.php");
			include("../php/conectaserv.php");

$local= "fdb14.biz.nf";
$usuario = "2011625_lfdjs";
$senhabanco = "09silva10lfdjs1991luiz";
$banco = "2011625_lfdjs";

$conexao = mysqli_connect ($local,$usuario,$senhabanco) or die ("Erro ao conectar ao banco de dados<br>".mysqli_error($conexao));
mysqli_select_db($conexao,$banco) or die ("<br>Erro ao selecionar ao banco de dados<br>".mysqli_error());
$mostra = "select * from perfil order by nomePerfil asc" ;
$exibe = mysqli_query($conexao,$mostra) or die ("Impossível exibir perfil<br>".mysqli_error($mostra));

			while ($anuncia = mysqli_fetch_assoc($exibe)){
				echo("
					<option value=".$anuncia['idPerfil']."> ".$anuncia['nomePerfil']." </option>");
					
				}

			?>
		

						<!--<option selected>Cliente</option>-->
			
		</select>
		<br>
			<span>*</span><label>Login</label><input type="text" name="login" required> 
			<span>*</span><label>Senha</label><input type='password' name="senha" required>
			<br><br><br>
			<span>*</span>Dados obrigatórios
				<br> </fieldset>

				<hr/>
			<fieldset><legend>Endereço</legend>
		<span>*</span>CEP: <input Type="text" maxlength="9" name="cep" id="cep" required></input>
		<br>
		<br>
		<span>*</span>Logradouro: <input Type="text" id="rua" name="logradouro" required ></input>
		<span>*</span>Numero: <input Type="text" size="5"  name="numero" id="numero" required></input>
			<br>
			<br>
		Complemento: <input Type="text" name="complemento" ></input>
			<br>
			<br>
		<span>*</span>Bairro: <input Type="text" size="30" id="bairro" name="bairro" required></input>
		<span>*</span>Cidade: <input Type="text" size="30" id="cidade" name="cidade" required></input>
			<br>
			<br>
		<span>*</span>UF<input type="text" name="uf" id="uf" maxlength="2">
			</fieldset>
			<br>
			<br>



		<input type="reset" value="limpar"></input>
		<input type="button" onClick="alert('Gol do Corinthians!!!!!!!!!!')" value="Clique aqui"></input>
		<input type="submit" value="Cadastrar"></input>
		<button color="black" font="white">Botão em teste</button>
	

	</form>
	</font>
</body>
<footer>©2016 LFDJS PRODUCTIONS</footer>
</html>