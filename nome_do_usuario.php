<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
</head>
<body>
	<center>
		<h1>Olá, quem é você?</h1><br/>

		<h2>
			<form method="POST">
				<input type="text" name="username" placeholder="Digite seu nome aqui..." />
				<input type="submit" value="Enviar" />
			</form>
		</h2>
			<?php

			    if(isset($_POST['username']) && !empty($_POST['username'])) {

			    	$username = $_POST['username'];

			    	echo "Olá ".$username.", seja bem vindo à sua página de testes.";
			    }  else {
			    	echo "Hello stranger.";
			    }
			?>
	</center>
</body>