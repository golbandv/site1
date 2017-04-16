<?php
 include "models/users.php";
include "views/form_registration.php";

/*if (password_verify($a,$hash)){
    echo "верен";
}
else {
    echo "неверен";
}*/
$login=$_POST['login'];
$pass=$_POST['password'];
if (isset($login) and isset($pass)){
    $pass=password_hash($pass,PASSWORD_DEFAULT);
    $users=new users();
    $users->login=$login;
    $users->password=$pass;
    $users->insert();
}
else {
    echo "ошибка";
}
