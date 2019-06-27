<?php
interface Animal
{
	/* 
	Funçao aqui vai ser obrigatoriamente pública e não define o bloco de códigos, finaliza com ;
	entre os parênteses, caso haja, podem ser passados parâmetros
	*/
	public function miar();
}

class Gato implements Animal
{
	public function miar()
	{
		echo "Miau";
	}
}

$gato = new Gato();
$gato->miar();
?>