<?php
include "assets/layout/header.php";
?>

<?php

$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;
$password = $_POST['password'] ?? null;

// зададим книгу паролей
$users = [
    'admin' => ['id' => '1', 'password' => '132432'],
];
if (null !== $username || null !== $password) {

    // Если пароль из базы совпадает с паролем из формы
    if ($password === $users['admin']['password']) {

        // Стартуем сессию:
        session_start();

        // Пишем в сессию информацию о том, что мы авторизовались:
        $_SESSION['auth'] = true;

        // Пишем в сессию логин и id пользователя
        $_SESSION['id'] = $users['admin']['id'];
        $_SESSION['login'] = $username;

    }
}
$auth = $_SESSION['auth'] ?? null;?>
<?php
if (!$auth){?>
    <form action="login.php" method="post">
    <input name="login" type="text" placeholder="Логин">
    <input name="password" type="password" placeholder="Пароль">
    <input name="submit" type="submit" value="Войти">
</form><?php
}
// если авторизованы
else if ($auth) {
    header('Location: index.php', true, 301);
    exit();
    ?>
<?php }?>

<?php
include "assets/layout/footer.php";
?>

