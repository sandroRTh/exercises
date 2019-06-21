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
			$this->titulo = $t;
	}

	public function getComentarios()
	{
		return $this->comentarios;
	}

	public function addComentarios($c)
	{
		$this->comentarios[] = $c;
		$this->contarComentarios();
	}

	public function getQuantidadeComentarios()
	{
		return $this->qtdComentarios;
	}

	private function contarComentarios()
	{
		$this->qtdComentarios = count($this->comentarios);
	}
}

$post = new Post();
$post->addComentarios("teste");
$post->addComentarios("teste1");
$post->addComentarios("teste2");
$post->addComentarios("teste3");

echo "Quantidade de comentários: ".$post->getQuantidadeComentarios();
?>