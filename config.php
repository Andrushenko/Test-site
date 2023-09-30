<?php
session_start();
$host = 'localhost'; // адрес сервера 
$database = 'u0695697_367bs'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль

// подключаемся к серверу
$mysqli = new mysqli($host, $user, $password, $database);
$sql = "SET NAMES utf8";
$mysqli->query($sql);

// проверка на подключение
if (mysqli_connect_errno()) { 
    printf("Нет подключения: %s\n", mysqli_connect_error()); 
    exit(); 
}
?>