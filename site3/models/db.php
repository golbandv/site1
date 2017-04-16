<?php

class db
{
public static function getconnection(){

$paramspath = ROOT."/config/db_params.php";
$params = include_once ($paramspath);

$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
$db = new PDO($dsn, $params['user'], $params['pass']);
return $db;
    }
}