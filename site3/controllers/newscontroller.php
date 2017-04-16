<?php
include_once ROOT."/models/news.php";
class newscontroller{
    public function actionindex(){
        $newslist=[];
        $newslist=news::getnewslist();

        require_once ROOT . "/views/news/index.php";
        return true;

    }
public function actionview($id){

        if ($id){
            $newsitem=news::getnewsitembyid($id);
            var_dump($newsitem);
        }
return true;
    }
}