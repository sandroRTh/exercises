<?php

/**
 * 
 */
class calculadora
{
	
	private $numero;
	
	public function __construct($numeroInicial)
	{
		$this->numero = $numeroInicial;
	}

	public function somar($n1)
	{
		$this->numero += $n1;
		return $this;
	}

	public function subtrair($n1)
	{
		$this->numero -= $n1;
		return $this;
	}

	public function multiplicar($n1)
	{
		$this->numero *= $n1;
		return $this;
	}

	public function dividir($n1)
	{
		$this->numero /= $n1;
		return $this;
	}

	public function resultado()
	{
		return $this->numero;
	}
}

$calc = new calculadora(10);
$calc->somar(2)->subtrair(4)->multiplicar(6)->dividir(2);

$resultado = $calc->resultado();

echo 'Resultado = '.$resultado;
?>