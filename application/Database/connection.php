<?php

require_once 'functions.php';

$connection = connect();
$login= htmlentities(mysqli_real_escape_string($connection, $_POST['login']));
$password = htmlentities(mysqli_real_escape_string($connection, $_POST['password']));


header('Location: ..\View\authorization.php');
die;

