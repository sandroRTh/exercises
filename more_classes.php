<?php

// NÃO COLOCAR PARENTESES DEPOIS DA CLASSE como no exemplo a seguir: class Classe()
class Post
{
	private $titulo;
	private $data;
	private $mensagem;
	private $comentarios;

	public function getTitulo()	
	{
		return $this->titulo;
	}

	public function setTitulo($t)	
	{
		if (is_string($t)) 
		{
			$this->titulo = $t;
		}
		else
		{
			echo "Você não pode digitar inteiros, apenas texto.";
		}
		
	}
}

$post_0 = new Post();
$post_0->setTitulo(1);

$post_1 = new Post();
$post_1->setTitulo("Aprendendo sobre classes.");

//echo "Titulo: ".$post_0->getTitulo();
echo "Titulo inválido: ";
$post_0->getTitulo();
echo "<br/><br/>";

echo "Titulo válido: ".$post_1->getTitulo();
?>