<?php
////подключение к MySQL
//$mysql = new mysqli('localhost', 'root', 'root', 'test');
////устанавливаем кодировку
//$mysql->query("SET NAMES 'utf8'");
////проверка на корректное подключение
//
//if($mysql->connect_error) die('error connection');
//
////запрос данных
//$query = 'SELECT * FROM Users';
//$result = $mysql->query($query);
//
//if(!$result) die('Error result');
//echo '<pre>';
//print_r($result);
//echo '</pre>';
//$mysql->close();

$mysql = new mysqli('localhost', 'root', 'root', 'register_db');
//$mysql->query("CREATE DATABASE register_db");
//$mysql->query("USE register_db");
//$mysql->query("SET NAMES 'utf8'");
$mysql->query("CREATE TABLE users (
    `id` INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(20),
    `login` VARCHAR(20),
    `password` VARCHAR(32)
)");
//$mysql->query("DROP TABLE `users`");
//$mysql->query("ALTER TABLE `users` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT");
//$mysql->query("USE test");
//$mysql->query("CREATE DATABASE test2");
$mysql->close();



