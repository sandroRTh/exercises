<?php

require 'usuario.class.php';

$usuario = new Usuario(1);
$usuario->delete();
/*$usuario->setNome("Ciclano d'Alí");
$usuario->setEmail('ciclanodali@outlook.com');
$usuario->setSenha('abC246');
$usuario->salvar();*/
echo 'Just some random text.';
?>