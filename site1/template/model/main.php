<?php
 class model{
    const DSN="mysql:dbname=site1;mysql:host=localhost;charset=UTF8";
    const USER="root";
    const PASSWORD="";
public $pdo;
    public function __construct()
{
    $this->pdo=NEW PDO(self::DSN,self::USER,self::PASSWORD);
}
public function insert($name,$link){
$stmp=$this->pdo->prepare("INSERT INTO main (title,link) VALUES (:name,:link)");
return $stmp->execute([':name'=>$name,':link'=>$link]);
}
public function query(){
    return $query=$this->pdo->query('SELECT * FROM main');
}
}