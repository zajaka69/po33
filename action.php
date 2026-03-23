<?php
// action.php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    $errors = [];
    
    // Валидация email
    if (empty($email)) {
        $errors[] = "Поле Email обязательно для заполнения";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Некорректный формат Email";
    }
    
    // Валидация пароля
    if (empty($password)) {
        $errors[] = "Поле Пароль обязательно для заполнения";
    } elseif (strlen($password) < 6) {
        $errors[] = "Пароль должен содержать минимум 6 символов";
    }
    
    // Вывод результатов
    if (!empty($errors)) {
        echo "<h2>Ошибки:</h2><ul>";
        foreach ($errors as $error) {
            echo "<li style='color:red'>$error</li>";
        }
        echo "</ul><a href='index.php'>← Вернуться</a>";
    } else {
        echo "<h2>Успешно!</h2>";
        echo "<p>Email: " . htmlspecialchars($email) . "</p>";
        echo "<p>Пол: " . ($_POST['gender'] ?? 'не указан') . "</p>";
        echo "<a href='index.php'>← На главную</a>";
    }
    
} else {
    // Если файл открыли напрямую
    header("Location: index.php");
    exit;
   }