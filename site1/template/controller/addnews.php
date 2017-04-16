<?php

require_once "models/main.php";
include "functions/translit.php";
class addnews
{
    public function index(){
        include "views/form_login.php";
    }
    public function news(){
        $query=new model();
        $name=$_POST['name'];
        $link='/'.translit($name);
        $query->insert($name,$link);
        $query=$query->query();
        include "views/addnews_view.php";
    }
}