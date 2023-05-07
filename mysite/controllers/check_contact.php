<?php

use JetBrains\PhpStorm\NoReturn;

session_start();

unset($_SESSION["username"]);
unset($_SESSION['email']);
unset($_SESSION['subject']);
unset($_SESSION['message']);
unset($_SESSION['error_username']);
unset($_SESSION['error_message']);
unset($_SESSION['error_email']);
unset($_SESSION['error_subject']);
unset($_SESSION['success_mail']);
#[NoReturn] function redirect()
{
    header("Location: ../pages/about.php");
    exit();
}

    if ($_POST != '') {
$username = htmlspecialchars(trim($_POST['username']));
$email = htmlspecialchars(trim($_POST['email']));
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));
    }
//сохраняем в сессии
$_SESSION['username'] = $username;
$_SESSION['email'] = $email;
$_SESSION['subject'] = $subject;
$_SESSION['message'] = $message;


if (strlen($username) <= 1) {
    $_SESSION["error_username"] = 'Введите корректное имя!';
    redirect();
} elseif (strlen($email) <= 3 || !(strpos($email, "@"))) {
    $_SESSION["error_email"] = 'Вы ввели некорректный email';
    redirect();
} elseif (strlen($subject) < 3) {
    $_SESSION["error_subject"] = 'Тема сообщения не может быть менее 3 символов';
    redirect();
} elseif (strlen($message) < 5) {
    $_SESSION["error_message"] = 'Напишите подробнее';
    redirect();
} else {
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $from = "example@mail.ru";
    $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
    mail("zhilzhil@mail.ru", $subject, $message, $headers);

    $_SESSION['success_mail'] = "Вы успешно отправили письмо!";
    redirect();
}
session_destroy();

