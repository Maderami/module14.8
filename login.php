<?php
include "assets/layout/header.php";
include "User.php";
require('filehandler.php');
?>

<?php

$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;
$password = $_POST['password'] ?? null;
$usersList = new Files();
$usersList = $usersList->getUserListOFile('userslist.txt');

if (null !== $username || null !== $password) {
    $pass = md5($password);
    // Если пароль из базы совпадает с паролем из формы
    if ($pass === $usersList[$username]['password']) {


        // Пишем в сессию информацию о том, что мы авторизовались:
        $_SESSION['auth'] = true;

        // Пишем в сессию логин и id пользователя
        $_SESSION['id'] = $usersList[$username]['id'];
        $_SESSION['login'] = $username;
        $_SESSION['date'] = date("d.m.y", time());

    }
}

$auth = $_SESSION['auth'] ?? null; ?>
<?php
if (!$auth) {
    ?>
    <form action="login.php" method="post">
        <input name="login" type="text" placeholder="Логин">
        <input name="password" type="password" placeholder="Пароль">
        <input name="submit" type="submit" value="Войти">
    </form><?php
} // если авторизованы
else if ($auth) {
    header('Location: index.php', true, 301);
    exit();
    ?>
<?php } ?>

<?php
include "assets/layout/footer.php";
?>

