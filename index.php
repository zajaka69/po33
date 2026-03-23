<!-- index.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="action.php" method="POST">
        <label>Имя:
            <input type="text" name="name" required>
        </label><br>
        
        <label>Email:
            <input type="email" name="email" required>
        </label><br>
        
        <label>Пароль:
            <input type="password" name="password" required minlength="6">
        </label><br>
        
        <label>Пол:
            <select name="gender" required>
                <option value="">Выберите пол</option>
                <option value="male">Мужской</option>
                <option value="female">Женский</option>
                <option value="other">Другой</option>
            </select>
        </label><br>
        
        <button type="submit">Зарегистрироваться</button>
    </form>

    <!-- Добавьте в конец index.php или в отдельный файл -->
<h2>Калькулятор</h2>
<form method="POST">
    <input type="number" name="num1" step="any" required placeholder="Первое число">
    <input type="number" name="num2" step="any" required placeholder="Второе число">
    
    <button type="submit" name="action" value="add">+</button>
    <button type="submit" name="action" value="subtract">−</button>
    <button type="submit" name="action" value="multiply">×</button>
    <button type="submit" name="action" value="divide">÷</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['action'])) {
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);
    $action = $_POST['action'];
    $result = null;
    $error = null;
    
    switch($action) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 == 0) {
                $error = "Деление на ноль невозможно!";
            } else {
                $result = $num1 / $num2;
            }
            break;
    }
    
    if ($error) {
        echo "<p style='color:red;font-weight:bold'>$error</p>";
    } elseif ($result !== null) {
        echo "<p><strong>Результат:</strong> $result</p>";
    }
}
?>
</body>
</html>