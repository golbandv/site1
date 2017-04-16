<?php
include "../model/users.php";
if (isset($_POST['login'])){
    $login=$_POST['login'];
}
if (isset($_POST['password'])){
    $pass=$_POST['password'];
}
if (users::getlogin1($login) && password_verify($pass,users::getlogin1($login)[0]->password)){
  $_SESSION['login']=$login;
}
else {
    echo "пользователя нет";
}
echo $_SESSION['login'];