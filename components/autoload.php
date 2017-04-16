<?php
class autoload{
   public static function autoloader($classname){
       if (file_exists(ROOT."/components/".$classname.".php")){
      include_once ROOT."/components/".$classname.".php";}
       if (file_exists(ROOT."/model/".$classname.".php")){
           include_once ROOT."/model/".$classname.".php";}
   }
}
/*function my_autoloader($class){
    require_once ROOT.'/components/'.$class.'.php';
}*/
