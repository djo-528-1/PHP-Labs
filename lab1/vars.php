<?php
$name = "Кирилл";
$age = 20;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Переменные</title>
</head>

<body>
    <h1>Переменные и вывод</h1>
    <?php
    echo "Меня зовут: $name" . PHP_EOL;
    echo "Мне $age лет" . PHP_EOL;
    var_dump($name, $age);
    unset($name, $age);
    ?>
</body>
</html>