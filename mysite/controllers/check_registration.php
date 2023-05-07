<?php

if(empty($_POST)) {
    echo "Вы не ввели данные!";
    exit();

}
    $login = htmlspecialchars(trim (strval($_POST['login'])));
    $name = htmlspecialchars(trim(strval($_POST['name'])));
    $password = htmlspecialchars(trim(strval($_POST['password'])));


if (mb_strlen($login) < 1 || mb_strlen($login) > 90) {
    echo "Недопустимый логин";
    exit();
} elseif (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    echo "Недопустимое имя пользователя";
    exit();
};
$password = md5($password);
$mysql = new mysqli('localhost', 'root', 'root', "register_db");
$mysql->query("INSERT INTO `users` (`name`, `login`, `password`) 
    VALUES ('$name','$login','$password')");
echo "Вы успешно зарегистрированы!";
header('Location: ../pages/index.php');

