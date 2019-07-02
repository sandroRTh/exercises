<!DOCTYPE html>
<html>
<head>
	<title>Adicionar novo contato.</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h1>Adicionar novo contato</h1>
	</center>
	<hr>

	<form method="POST" action="adicionar_submit.php">

		Digite o nome do novo contato aqui:
		<input type="text" name="nome" required />
		<br/>
		<br/>
		Digite o email aqui:
		<input type="email" name="email" required />
		<br/>
		<br/>
		<input type="submit" value="Cadastrar">
		
	</form>
</body>
</html>