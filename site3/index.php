<?php
const ROOT = __DIR__;
 require_once(ROOT . '/components/router.php');
 require_once(ROOT . "/models/db.php");
 $router=new router();
 echo $router->run();
