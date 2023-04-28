
<?php
require_once 'setting.php';
//подключение к MySQL
$connection = new mysqli($host, $user, $pass, $data);
if($connection->connect_error) die('error connection');
echo '<p>Привет</p>';
//запрос данных
$query = 'SELECT * FROM Users';
$result = $connection->query($query);

if(!$result) die('Error result');
echo '<pre>';
print_r($result);
echo '</pre>';


