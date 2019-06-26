<?php

try
{
	$pdo = new PDO("pgsql:host=localhost;port=5433;dbname=pdo;user=postgres;password=qwe123");
}

catch(PDOException $e)
{
	echo 'Falha na conexão: '.$e->getMessage();
}

//  Realiza a quantagem de quantas entradas há na referida tabela do banco de dados.
$stmt = "SELECT COUNT(*) AS qtd FROM postagens";
$stmt = $pdo->query($stmt);
$stmt = $stmt->fetch();
$total = $stmt['qtd'];
$qt_por_pag = 12;
$paginas = $total / $qt_por_pag;

$pg = 1;
if (isset($_GET['p']) && !empty($_GET['p']))
{
	$pg = addslashes($_GET['p']);
}
$offset = ($pg - 1)* $qt_por_pag;

$stmt = "SELECT * FROM postagens ORDER BY id LIMIT $qt_por_pag OFFSET $offset";
$stmt = $pdo->query($stmt);

if ($stmt->rowCount() > 0)
{
	foreach ($stmt->fetchAll() as $coment)
	{
		echo $coment['id'].' - '.$coment['titulo'].'<br>';
	}
}

echo '<hr>';
echo 'TOTAL DE PÁGINAS: '.ceil($paginas);
echo '<br>';
for($x = 0; $x < ceil($paginas); $x++)
{
	echo '<a href="?p='.($x+1).'">[ '.($x+1).' ]</a>';
}
?>