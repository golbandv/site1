<?php
include "template/models/main.php";
class view{
    public function news(){
        $query=new model();
        $query=$query->query();
        include "template/views/nav.php";
    }
}
$view=new view();
$view->news();