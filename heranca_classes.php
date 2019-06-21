<?php

class Animal
{
	public $nome;
	public $idade;
}

public function setNome($nome)
{
	$this->nome = $nome;
}

public function getNome()
{
	return $this->nome;
}

class Passaro extends Animal
{
	private $qtd_de_patas;
	private $pia_canta;
}
class Cavalo extends Animal
{
	private $qtd_de_patas;
	private $relincha;
}

$cavalo = new Cavalo();
$cavalo->nome = "Pé de Pano";

echo "Eu tenho um cavalo chamado ".$cavalo->nome;
?>