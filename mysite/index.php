<?php
$title = "Главная";
require "blocks/header.php";
?>
    <h1>Главная</h1>

    <form action="./controllers/check_post.php" method="POST">
        <input type="text" name="username" placeholder="Введите имя" class="form-control"><br>
        <input type="password" name="password" placeholder="Введите пароль" class="form-control"><br>
        <input type="email" name="email" placeholder="Email" class="form-control"><br>
        <textarea name="message" placeholder="Введите сообщение" class="form-control"></textarea><br>
        <input type="submit" value="Отправить" class="btn btn-success">
    </form>
<?php
require "blocks/footer.php";
?>