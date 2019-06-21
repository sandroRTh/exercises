<?php

class Contato
{
	private $pdo;

	public function __construct()
	{
		$this->pdo = new PDO("pgsql:host=localhost;port=5433;dbname=crud;user=postgres;password=qwe123")
	}
}
?>