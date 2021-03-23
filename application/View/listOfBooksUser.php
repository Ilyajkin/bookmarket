<?php
require_once '../Database/functions.php';
$connection = connect();
$result = get($connection);?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Онлайн библиотека, читать онлайн">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Онлайн библиотека">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/template.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/jquery-ui.css">
    <title>Моя библиотека</title>
</head>
<body>
<div class="container">
    <header class="row">
        <div class="col-md-2">
            <div class="row"><img class="logo" src="img/logo.jpg" alt=""></div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="title"><p>Онлайн библиотека</p></div>
            </div>
        </div>
        <div class="col-md-4 contacts">
            <div class="row"><a href="../../index.php" class="email">books@inbox.ru</a></div>
            <div class="row"><a href="tel: 88442653922" class="tel">8 (8442) 888888</a></div>
        </div>
        <div class="col-md-2">
            <div class="row">
                <div class="button-authorization">
                    <form action="/" method="post">
                        <button>
                            <a href="authorization.php">Войти</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="col-md-12 banner"></div>
        <div class="row">
            <div class="row top-menu">
                <div class="col-md-4"><a href="main.php" class="main">Главная страница</a></div>
                <div class="col-md-4"><a href="listOfBooks.php" class="listOfBooks">Список книг</a></div>
                <div class="col-md-4"><a href="listOfBooksUser.php" class="listOfBooksUser">Моя библиотека</a></div>
            </div>
        </div>

    </main>
    <footer class="row">
        <div class="col-md-6 lower-menu">
            <ul>
                <li><a href="main.php" class="menu-item">Главная страница</a></li>
                <li><a href="authorization.php" class="menu-item">Авторизация</a></li>
                <li><a href="listOfBooks.php" class="menu-item">Библиотека</a></li>
                <li><a href="listOfBooksUser.php" class="menu-item">Личная библиотека</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="address">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nesciunt!</p>
            </div>
        </div>
    </footer>
</div>

</body>
</html>