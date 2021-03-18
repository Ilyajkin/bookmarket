<?php

function connect() {
// подключаемся к серверу
    $config = require_once 'dbconfig.php';
    return mysqli_connect($config['host'], $config['login'], $config['password'], $config['dbname']);
}
// Добовляем данные
function add($connection, $login, $password) {
    return mysqli_query($connection, "INSERT INTO users (login, password) VALUES('$login', '$password')");
}

function get($connection) {
    $outputQuery = mysqli_query($connection, "SELECT * FROM listbook");
    $result = array();
    while ($row = mysqli_fetch_assoc($outputQuery)) {
        $result[] = $row;
    }
    return $result;
}

