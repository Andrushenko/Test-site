<?php
  $login = strtolower(htmlspecialchars($_POST["login"])); // Получаем логин, преобразуем ряд спецсимволов и приводим строку к нижнему регистру
  $mysqli = new mysqli("localhost", "root", "", "u0695697_367bs"); // Подключаемся к базе данных
  $query = "SELECT `id_user` FROM `users` WHERE `login`='".$mysqli->real_escape_string($login)."'"; // Формируем запрос на поиск пользователя с полученным логином
  $result_set = $mysqli->query($query); // Отправляем запрос
  echo $result_set->num_rows != 0; // Если ничего не найдено, то выводим false, иначе true
?>