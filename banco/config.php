<?php

class Banco
{

    public static $db;

    protected $conexao;

    public static function instanciar()
    {
        if (! self::$db) {
            self::$db = new Banco();
            self::$db->conectar();
        }
        return self::$db;
    }

    protected function conectar()
    {
        $this->conexao = new PDO('mysql:host=mysql.hostinger.com.br; dbname=u880744280_dsl', 'u880744280_dsl', 'zaq12wsx');
        PDO::ERRMODE_EXCEPTION;
    }

    protected function inserir($sql)
    {
        $statement = $this->conexao->prepare($sql);
        $statement->execute();
    }

    protected function verificaLogin(){

        
    }
}