<?php

session_start();
require_once 'functions.php';

$connection = connect();

$login = htmlentities(mysqli_real_escape_string($connection, $_POST['login']));
$password = htmlentities(mysqli_real_escape_string($connection, $_POST['password']));

$checkUser = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
if (mysqli_num_rows($checkUser) > 0) {
    echo "Авторизирация прошла успешно";
    header('Location: ../View/listOfBooksUser.php');
} else {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location: ../View/authorization.php');
}
