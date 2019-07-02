<?php

include '../contato.class.php';
$contato = new contato();

if (!empty($_GET['id']))
{
	$id = $_GET['id'];
	$info = $contato->getInfo($id);

	if (empty($info['email']))
	{
		header("Location: ../index.php");
		exit;
	}
}

else
{
	header("Location: ../index.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar dados.</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h1>Editar dados do contato</h1>
	</center>
	<hr>

	<form method="POST" action="editar_submit.php">

		<input type="hidden" name="id" value="<?php echo $info['id']; ?>">
		Nome:
		<input type="text" name="nome" value="<?php echo $info['nome']; ?>" />
		<br/>
		<br/>
		Email: 
		<input type="email" name="email" value="<?php echo $info['email']; ?>" />
		<br/>
		<br/>
		<input type="submit" value="Atualizar">
		
	</form>
</body>
</html>