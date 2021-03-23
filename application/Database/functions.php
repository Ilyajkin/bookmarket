<?php

function connect() {
// подключаемся к серверу
    $config = require_once 'dbconfig.php';
    return mysqli_connect($config['host'], $config['login'], $config['password'], $config['dbname']);
}
// Проверка авторизации
function checkUserAuth($connection, $login, $password) {
    $checkUser = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($checkUser) > 0) {
        echo "Авторизирация прошла успешно";
        header('Location: ../View/listOfBooksUser.php');
    } else {
        echo "Авторизироваться не удалось";
        header('Location: ../View/authorization.php');
    }
}
// Вывод списка книг
function get($connection) {
    $outputQuery = mysqli_query($connection, "SELECT * FROM listbook");
    $result = array();
    while ($row = mysqli_fetch_assoc($outputQuery)) {
        $result[] = $row;
    }
    return $result;
}

