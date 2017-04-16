<?php
const ROOT = __DIR__;
include_once ROOT."/components/autoload.php";
spl_autoload_register(['autoload','autoloader']);
router::run();