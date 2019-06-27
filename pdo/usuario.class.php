<?php

class Usuario
{
	private $id;
	private $nome;
	private $email;
	private $senha;
	private $pdo;

	public function __construct($i = '')
	{
		try
		{
			$this->pdo = new PDO("pgsql:host=localhost;port=5432;dbname=test_db;user=postgres;password=qwe123");
		}

		catch(PDOException $e)
		{
			echo 'Falha na conexão: '.$e->getMessage();
		}

		if (!empty($i))
		{
			
			$stmt = "SELECT * FROM usuarios WHERE id = ?";
			$stmt = $this->pdo->prepare($stmt);
			$stmt->execute(array($i));

			if ($stmt->rowCount() > 0)
			{
				$data = $stmt->fetch();
				$this->id = $data['id'];
				$this->nome = $data['nome'];
				$this->email = $data['email'];
				$this->senha = $data['senha'];
			}
		}
	}

	public function getId()
	{
		return $this->id;
	}

	public function setEmail($e)
	{
		$this->email = $e;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setSenha($s)
	{
		$this->senha = md5($s);		
	}

	public function setNome($n)
	{
		$this->nome = $n;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function salvar()
	{
		if (!empty($this->id))
		{
			$stmt = "UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?";
			$stmt = $this->pdo->prepare($stmt);
			$stmt->execute(array($this->nome, $this->email, $this->senha, $this->id));
		}

		else
		{
			$stmt = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
			$stmt = $this->pdo->prepare($stmt);
			$stmt->execute(array($this->nome, $this->email, $this->senha));
		}
	}

	public function delete()
	{
		$stmt = "DELETE FROM usuarios WHERE id = ?";
		$stmt = $this->pdo->prepare($stmt);
		$stmt->execute(array($this->id));
	}
}
?>