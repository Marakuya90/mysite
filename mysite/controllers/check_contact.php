<?php
session_start();

if ($_POST != ''){

$username = htmlspecialchars(trim($_POST['username']));
$email = htmlspecialchars(trim($_POST['email']));
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));

//сохраняем в сесии
$_SESSION['username'] = $username;
$_SESSION['email'] = $email;
$_SESSION['subject'] = $subject;
$_SESSION['message'] = $message;

header("Location: ../about.php");
}