<?php

class Gato
{
	
	public function miar()
	{
		echo "Miau.";
	}

	public $nome;
	private $idade;

}

//instanciando a classe

$frajola = new Gato();
$frajola-> miar();

$felix = new Gato();
$felix-> miar();

$cat = new  Gato();	
$cat->nome = "Wiskah"; 

/* só executa uma função uma vez (o gato vem, mia e vai embora)
não é recomendado que esta forma seja utilizada.*/
Gato::miar();
echo "<br/>";

// se eu concateno $cat-> miar() ao final do echo ele mia no inicio da frase. Por que?
echo "Meu gato se chama ".$cat->nome." e ele faz ";
$cat-> miar();
?>