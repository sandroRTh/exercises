<?php

require "contato.class.php";

$contato = new Contato();
$contato->adicionar('sandro.thome@outlook.com', 'Sandro Thomé');
$contato->adicionar('fulano@gmail.com');

// Vai buscar o nome no banco de dados a partir do e-mail informado.
$nome = $contato->getNome('sandro.thome@outlook.com');
echo "Nome: ".$nome;
echo "<br/>";

// Vai lista todos os contatos inseridos na lista.
$lista = $contato->getAll();
echo '<pre>',print_r($lista),'</pre>';
echo "<br/>";

// Vai alterar o nome do contato correspondente ao email informado.
$alterar = $contato->editar('Fulano', 'fulano@gmail.com');
if ($alterar == true)
{
	echo 'O nome foi alterado com sucesso.';
	echo "<br/>";
}
else {
	echo 'Email não encontrado na base de dados.';
	echo "<br/>";
}

$excluir = $contato->excluir('exemplo@email.com');
if ($excluir == true)
{
	echo 'Usuário excuído com sucesso.';
	echo "<br/>";
}
else
{
	echo 'Usuário não encontrado na base de dados.';
	echo "<br/>";
}
?>