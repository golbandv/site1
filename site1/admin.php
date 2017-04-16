<?
session_start();
if (!isset($_SESSION['login'])){
    echo "запрещенно";
}
else{
    echo "вход в панель";
}