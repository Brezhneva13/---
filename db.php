<?php
$host = 'localhost'; // Адрес сервера
$db = 'your_database'; // Имя базы данных
$user = 'your_username'; // Имя пользователя
$pass = 'your_password'; // Пароль

// Создаем подключение
$conn = new mysqli($host, $user, $pass, $db);

// Проверка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
