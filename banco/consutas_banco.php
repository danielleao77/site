<?php
include_once 'config.php';


    class conBanco
    {
       public $email ;
       public $senha ;
        
        public function login(){
                        
            $sql = new PDO($dsn, $username, $passwd, $options);
        }
    }