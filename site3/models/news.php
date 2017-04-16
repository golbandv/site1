<?php
class news{
    public static function getnewsitembyid(){

    }
    public static function getnewslist(){
$db=db::getconnection();
$result=$db->query('SELECT id, title, text FROM users1 ORDER BY id DESC LIMIT 10');
$newslist=[];
$i=0;
while($row=$result->fetch()){
$newslist[$i]['id']=$row['id'];
$newslist[$i]['title']=$row['title'];
$newslist[$i]['text']=$row['text'];
    $i++;
}
return $newslist;
    }
}