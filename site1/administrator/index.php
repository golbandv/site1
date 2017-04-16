<?php
if (!isset($_SESSION['login'])){
    echo "запрещенно";
}
else{
    echo "авторизация успешна";
}
