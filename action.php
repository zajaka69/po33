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