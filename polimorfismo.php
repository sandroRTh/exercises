<?php

class Animal
{
	public function getNome()
	{
		echo "getNome da classe Animal";
	}
}

class Cachorro extends Animal
{

}

class Gato extends Animal
{
	/* A classe Gato extende a classe animal então herda o getNome da classe Animal
	porém esta herança pode ser substituída conforme o ex de código abaixo.*/
	public function getNome()
	{
		echo "getNome da classe Gato";
	}
}

$cachorro = new Cachorro();
$cachorro->getNome();

echo "<br/>";

$gato = new Gato();
$gato->getNome();
?>