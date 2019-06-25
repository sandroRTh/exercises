<?php
include  'contato.class.php';
$contato = new Contato();
?>

<html>
<h1>CONTATOS</h1>
<a href="acoes/adicionar.php">[ADICIONAR CONTATO]</a>
<br/>
<br/>
<table border="2" width="600">
	<tr>
		<th>ID</th>
		<th>NOME</th>
		<th>E-MAIL</th>
		<th>AÇÕES</th>
	</tr>

	<?php
	$lista = $contato->getAll();
	foreach($lista as $contato):
	?>
	<tr>
		<td> <?php echo $contato['id']; ?></td>
		<td> <?php echo $contato['nome']; ?></td>
		<td> <?php echo $contato['email']; ?></td>
		<td>
			<a href="acoes/editar.php?id=<?php echo $contato['id']; ?>">[EDITAR]</a>
			<a href="acoes/excluir.php?id=<?php echo $contato['id']; ?>">[EXCLUIR]</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
</html>