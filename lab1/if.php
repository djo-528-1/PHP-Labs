<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Конструкции if-elseif-else</title>
</head>

<body>
<?php
    $age = 34;
    if ($age > 0 && $age < 18)
    {
        echo 'Вам ещё рано работать';
    }
    else if ($age > 18 && $age <=59)
    {
        echo 'Вам ещё работать и работать';
    }
    else if ($age > 59)
    {
        echo 'Вам пора на пенсию';
    }
    else
    {
        echo 'Неизвестный возраст';
    }
?>
</body>
</html>