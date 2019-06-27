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
	public function addComentarios($c)
	{
		$this->comentarios = $c;
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
	public function __construct($t, $c)
	{
		$this->setTitulo($t);
		$this->addComentarios($c);
	}
}
?>
<center>
	<form method="POST">
		Digite um título aqui:
		<input type="text" name="texto" size="40" />
		<br/><br/>
		Comente aqui:
		<input type="text" name="comentarios" size="60" placeholder='Digite as palavras separadas por virgula e espaço ", "' >
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
		echo "Comentários: ".implode($post->getComentarios($comentarios, [1]));
		echo "<br/>";
		echo "Quantidade de comentários: ".$post->getQuantidadeComentarios();
		echo "<br/>";
	}	
}
?>