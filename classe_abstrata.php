<?php

abstract class Animal
{
	public $nome;
	public $idade;

	abstract protected function galopar();

	public function setNome($n)
	{
		$this->nome = $n;
	}

	public function getNome()
	{
		return $this->nome;
	}
}

class Cavalo extends Animal
{
	private $qtd_de_patas;
	private $relincha;

	// Obrigatoriamente vai conter a função andar() mesmo que vazia
	public function galopar()
	{
		# code...
	}
}

$cavalo = new Cavalo();
$cavalo->nome = "Pé de Pano";

echo "Eu tenho um cavalo chamado ".$cavalo->nome;
?>