<?php
class router{
    private $routes;
    public function __construct()
    {
$routerPath=ROOT."/config/routes.php";
$this->routes= include($routerPath);
    }
    private function geturi(){
        if (!empty($_SERVER['REQUEST_URI'])){
          return $uri=trim($_SERVER['REQUEST_URI'],'/');
        }
    }
public function run(){
$uri=$this->geturi();
foreach ($this->routes as $uripattern => $path){
    if (preg_match("~$uripattern~",$uri)){
$internalroute=preg_replace("~$uripattern~",$path,$uri);    //внутренний путь   localhost/news/  нашли news меняем localhost/news/index
        $segments= explode('/',$internalroute);
        $controllername=array_shift($segments)."controller";
         $actionname="action".array_shift($segments);
         $parameters=$segments;
         $controllerfile=ROOT."/controllers/".$controllername.".php";
         if (file_exists($controllerfile)){
            include_once ($controllerfile);
         }
         $controllerobject=new $controllername;
         $result=call_user_func_array([$controllerobject,$actionname], $parameters);
        if ($result != null){
            break;
        }
    }
}
}
}