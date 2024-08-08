<?php // Стартуем сессию:
session_start();
$auth = $_SESSION['auth'] ?? null;
?>
<html>
<head>
    <link href="/assets/css/bootstrap.css" type="text/css" rel="stylesheet">
    <script src="/assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand navbar-light bg-light justify-content-center">
        <div class="container">
            <a class="navbar-brand" href="#">SPA-salon</a>
            <ul class="nav ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Наши услуги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Акции</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Фотогалерея</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Контакты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">О нас</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/assets/icons/person-circle.svg"/>
                        <p><?php if (isset($_SESSION['login'])) {
                                echo $_SESSION['login'];
                            } else { ?><?php } ?></p>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                        <?php if ($auth) { ?>
                            <li><a class="dropdown-item" href="#">Мой профиль</a></li>
                            <li><a class="dropdown-item" href="#">Настройки профиля</a></li>
                            <li><a class="dropdown-item" href="#">Мое бронирование</a></li>
                            <li><a class="dropdown-item" href="logout.php?do=exit">Выйти</a>
                            </li><?php } elseif (!$auth) { ?>
                            <li><a class="dropdown-item" href="/login.php">Войти</a></li>
                            <li><a class="dropdown-item" href="/signup.php">Регистрация</a></li>
                        <?php } ?>

                    </ul>
                </li>
            </ul>


        </div>

    </nav>
</header>
