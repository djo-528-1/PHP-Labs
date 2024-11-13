<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Использование функций обработки строк</title>
</head>
<body>
<?php
    $login = ' User ';
    $password = 'megaP@ssw0rd';
    $name = 'иван';
    $email = 'ivan@petrov.ru';
    $code = '<?=$login?>';

    $login = trim($login);
    $login = strtolower($login);
    echo 'Значение переменной login после модификации: ' . $login, '<br>';
    function checkPassword (string $password)
    {
        if (preg_match('/[A-Z]/', $password) && preg_match('/[a-z]/', $password) && preg_match('/[0-9]/', $password) && strlen($password) >= 8)
            echo 'Сложный пароль';
        else
            echo 'Пароль недостаточно сложный!';
    }
    checkPassword($password);
    echo '<br>';
    $name = mb_strtoupper(mb_substr($name, 0, 1, null), null) . mb_substr($name, 1, null, null);
    echo 'Значение переменной name после модификации: ' . $name, '<br>';
    if (filter_var($email, FILTER_VALIDATE_EMAIL))
        echo 'Значение переменной email корректно ';
    else
        echo 'Значение переменной email не корректно ';
    echo htmlspecialchars($code);
?>
</body>
</html>