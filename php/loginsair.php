<?php
@session_start();
	/*setsession["cpf_pessoa"];
	setsession["nome_pessoa"];
	setsession["senha_pessoa"];
	setsession["perfil_pessoa"];*/
	session_unset();
		session_destroy();
		
	echo ("
		<script>
			alert ('Valeu Mizeravi, volte mais vezes!');
			window.location = '../login_senha';
		</script>
	 "); 
?>