<?php
class route{
    public function __construct()
    {
    }
    public static function route(){
        $url=$_SERVER['REQUEST_URI'];
        $url=explode('/',$url);
        $directory='template';
        $controller='index';
        $action='index';
        if (!empty($url[1])){
            $directory=$url[1];
        }
        if (!empty($url[2])){
            $controller=$url[2];
        }
        if (file_exists($directory."/".$controller.'.php')){
            include $directory."/".$controller.'.php';
        }
        else {
            echo self::error404();
        }
        if (method_exists($controller,$action)){
            $controller=new $controller;
             $controller->$action();
        }
    }
    public static function error404(){
        echo "ошибка 404";
    }
}