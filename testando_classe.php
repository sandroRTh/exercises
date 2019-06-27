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
	}

	public function __construct($t)
	{
		$this->setTitulo($t);
	}
}
?>
<center>
	<form method="POST">
		Digite alguma frase aqui:
		<input type="text" name="texto" size="40" />
		<input type="submit" name="ENVIAR" />
		<br/>
		<br/>
		<hr>
	</form>
</center>

<?php
if (isset($_POST['texto']) && !empty($_POST['texto'])) 
{
	$texto = $_POST['texto'];
	$post = new Post($texto);

	echo "Título digitado: ".$post->getTitulo();
}
?>