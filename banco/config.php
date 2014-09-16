<?php 

class Banco {
	public static $db;
	protected $conexao;
	
	public static function instanciar(){

		if (!self::$db) {
			self::$db = new $Banco;
			self::$db->conectar();
		}
		returne self::$db;
	}

	protected function conectar (){
		$this->conexao=new PDO('mysql:host=localhost; dbname=test','root', '');
		PDO::ERRMODE_EXEPTION;

	}

	protected function inserir($sql){
		$statement = $this->conexao->prepare($sql);
		$statement->execute();
		
	}

	}