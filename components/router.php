<?php
class router extends basic {
    public static function run(){
        $routes=include ROOT."/configs/routes.php";
        if (!empty($_SERVER['REQUEST_URI'])){
            $uri=trim($_SERVER['REQUEST_URI'],'/');
        }
        foreach ($routes as $pattern=>$path){
        if (preg_match("~$pattern~",$uri)) {

            $internalrout = preg_replace("~$pattern~", $path, $uri);
            $segments = explode('/', $internalrout);
            $controller = array_shift($segments);
            $action = array_shift($segments);
            $params = $segments;
            if (file_exists(ROOT . "/controllers/" . $controller . ".php")) {
                include_once ROOT . "/controllers/" . $controller . ".php";
            }
            else {
                return self::error404();
            }
            $controllerobject = new $controller;
            call_user_func_array([$controllerobject, $action], $params);
            return;
        }
}
        return self::error404();
        }
}


