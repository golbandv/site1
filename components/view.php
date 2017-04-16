<?php
 class view{
     public function display($template){
         include_once ROOT."/layouts/header.php";
         include_once ROOT."/views/".$template.".php";
         include_once ROOT."/layouts/footer.php";
     }
 }