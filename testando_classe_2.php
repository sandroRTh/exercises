<?php

class Post
{
	private $titulo;
	private $data;
	private $mensagem;
	private $comentarios;
	private $qtdComentarios;

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

	public function getComentarios()
	{
		return $this->comentarios;
	}

	public function setComentarios($c)
	{
		$this->comentarios = $c;
	}

	public function __construct($t, $c)
	{
		$this->setTitulo($t);
		$this->setComentarios($c);
	}
}
?>
<center>
	<form method="POST">
		Digite um título aqui:
		<input type="text" name="texto" size="40" />
		<br/><br/>
		Comente aqui:
		<input type="text" name="comentarios" size="60" placeholder='Digite várias palavras separadas por virgula e espaço ", "' >
		<br/><br/>
		<input type="submit" name="ENVIAR" />

		<hr>
	</form>
</center>

<?php
if (isset($_POST['texto']) && !empty($_POST['texto'])) 
{
	if (isset($_POST['comentarios']) && !empty($_POST['comentarios'])) 
	{
		$texto = $_POST['texto'];
		$coment = $_POST['comentarios'];
		$comentarios = explode(", ", $coment);
		$post = new Post($texto, $comentarios);


		echo "Título digitado: ".$post->getTitulo();
		echo "<br/>";
		echo "Comentários: ".$post->getComentarios();
	}
	
}
?>