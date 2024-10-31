<?php
// config.php
$host = 'sql207.infinityfree.com'
; // Хост бази даних
$db   = 'oif0_37627179_db'; // Назва бази даних
$user = 'if0_37627179'; // Ім'я користувача
$pass = '1DR0t6oNw9lNgB'; // Пароль
// Створення з'єднання
$conn = new mysqli($servername, $username, $password, $dbname);
// Перевірка з'єднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
try {
    // Підключення до бази даних
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Обробка помилки з'єднання
    echo "Помилка з'єднання: " . $e->getMessage();
}

?>
