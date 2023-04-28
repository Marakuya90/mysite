<?php
//print_r($_POST);
$name = $_POST["username"];
$pass = $_POST["password"];
$email = $_POST["email"];

if(trim($name == '')) {
    echo "Вы не ввели имя пользователя";
} elseif (strlen(trim($name)) <= 1) {
    echo "Такого имени не существует";
} elseif (trim($email) == ""| trim($pass) == ""| trim($_POST['message']) == "" ) {
    echo "Введите все данные";
} else {
//    $pass = md5($pass);
//    echo "<h1>Все данные</h1><br><p>$pass</p><br><p>$email</p><br><p>$_POST[message]</p>";
//}
    $_POST['password'] = md5($pass);
    foreach ($_POST as $key => $value) {
        echo "<p>$value</p>";
    }
    header('Location: ../about.php');
    exit;
}