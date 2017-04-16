<?php
class db
{
    public $pdo;
    const DSN = "mysql:dbname=site1;mysql:host=localhost;charset=UTF8";
    const USER = "root";
    const PASSWORD = "";

    public function __construct()
    {
        return $this->pdo = new PDO(self::DSN, self::USER, self::PASSWORD);
    }

    public function query($sql, $params = [])
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS);
    }

    public function execute($sql,$params=[])
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute($params);
    }
}

