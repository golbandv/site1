<?php
class db{
    protected $pdo;
    public function __construct()
    {
        $paramspath=include ROOT."/configs/db_config.php";
        $dsn="mysql:host={$paramspath['host']};dbname={$paramspath['dbname']};charset=utf8";
        $this->pdo=new PDO($dsn,$paramspath['user'],$paramspath['pass'],$paramspath['opt']);
        return $this->pdo;
    }
    public function query(){
         $result=$this->pdo->query("SELECT * FROM users1");
      return  $result->fetch();
    }

}