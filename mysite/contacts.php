<?php
session_start();
$title = "Контакты";
require "blocks/header.php";
?>
    <h1 class="mt-5"><?=$title?></h1>
    <form action="./controllers/check_contact.php" method="POST" class="mt-5">
        <input type="text" name="username" placeholder="Введите имя" value="<?=$_SESSION['username']?>" class="form-control"><br>
        <input type="email" name="email" placeholder="Введите Email" value="<?=$_SESSION['email']?>" class="form-control"><br>
        <input type="text" name="subject" placeholder="Тема сообщения" value="<?=$_SESSION['subject']?>" class="form-control"><br>
        <textarea name="message" placeholder="Ваше сообщение" class="form-control"><?=$_SESSION['message']?></textarea><br>
        <button class="btn btn-success">Отправить</button>
    </form>
<?php
require "blocks/footer.php";
?>  