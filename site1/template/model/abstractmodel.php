<?php
include "db.php";
abstract class main{
    protected static $table;
    protected $data=[];
    public function __set($k, $v)
    {
       return $this->data[$k]=$v;
    }

public function __get($k)
{
    return $this->data[$k];
}

public static function getall(){
    $sql='SELECT * FROM '.static::$table;
    $db=new db();
    return $db->query($sql);
}

public static function getone(){
    $sql='SELECT * FROM '.static::$table.' WHERE id IN (:id)';
    $params=[':id' => 2];
    $db=new db();
    return $db->query($sql,$params);
}

    public static function getlogin($login,$pass){
        $sql='SELECT id FROM '.static::$table.' WHERE login = (:login) AND password = (:pass)';
        $params=[':login' => $login,':pass' => $pass];
        $db=new db();
        return $db->query($sql,$params);
    }
    public static function getlogin1($login){
        $sql='SELECT login, password FROM '.static::$table.' WHERE login = (:login)';
        $params=[':login' => $login];
        $db=new db();
        return $db->query($sql,$params);
    }

public static function findbycolumn($column,$value=[]){
    for ($i=0; $i<count($value); $i++){
        $values[]='?';
    }
    $values=implode(',',$values);
    $sql='SELECT * FROM '.static::$table.' WHERE '.$column.' IN ('.$values.')';
    $params=$value;
    $db=new db();
    return $db->query($sql,$params);
}
public function insert(){
    $cols=array_keys($this->data);
    $ins=[];
    foreach ($cols as $col){
        $ins[]=':'.$col;
        $data[':'.$col]=$this->data[$col];
    }
    $cols=implode(',',$cols);
    $ins=implode(',',$ins);
    $sql='INSERT INTO '.static::$table.'('.$cols.') VALUES ('.$ins.')';
    $db=new db();
    return $db->execute($sql, $data);
}

}