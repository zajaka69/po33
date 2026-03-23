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
</body>
</html>