<?php
session_start();
$title = "Контакты";
require "blocks/header.php";
?>
    <h1 class="mt-5"><?=$title?></h1>

<div class="text-success"><?php if(!empty($_SESSION["success_mail"])) echo $_SESSION["success_mail"];?></div>

    <form action="./controllers/check_contact.php" method="POST" class="mt-5">
        <input type="text" name="username" placeholder="Введите имя" value="<?php if(!empty($_SESSION['username']))
            echo $_SESSION['username'];?>" class="form-control"><br>
        <div class="text-danger"><?php if(!empty($_SESSION["error_username"])) echo $_SESSION["error_username"];?></div><br>
        
        <input type="email" name="email" placeholder="Введите Email" value="<?php if(!empty($_SESSION['email']))
            echo $_SESSION['email'];?>" class="form-control"><br>
        <div class="text-danger"><?php if(!empty($_SESSION["error_email"])) echo $_SESSION["error_email"];?></div><br>
        
        <input type="text" name="subject" placeholder="Тема сообщения" value="<?php if(!empty($_SESSION['subject']))
            echo $_SESSION['subject'];?>" class="form-control"><br>
        <div class="text-danger"><?php if(!empty($_SESSION["error_subject"])) echo $_SESSION["error_subject"];?></div><br>
        
        <textarea name="message" placeholder="Ваше сообщение" class="form-control"><?php if(!empty($_SESSION['message']))
                echo $_SESSION['message'];?></textarea><br>
        <div class="text-danger"><?php if(!empty($_SESSION["error_message"])) echo $_SESSION["error_message"];?></div><br>
        
        <button class="btn btn-success">Отправить</button>
    </form>
<?php
require "blocks/footer.php";
?>  