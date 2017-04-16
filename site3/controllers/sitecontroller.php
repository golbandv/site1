<?php
class sitecontroller{
   /* public static function display($layout){
        include_once ROOT."/views/layouts/$layout.php";
    }*/
  /* public $view;
   public function generate($content_view='',$template){

       include ROOT."/views/";
   }*/
    public function actionindex(){
    include_once ROOT . "/views/site/index.php";
    }
}
