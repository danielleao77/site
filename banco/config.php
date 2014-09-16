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
        $this->conexao = new PDO('mysql:host=localhost; dbname=test', 'root', '');
        PDO::ERRMODE_EXCEPTION;
    }

    protected function inserir($sql)
    {
        $statement = $this->conexao->prepare($sql);
        $statement->execute();
    }
}