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
    Меня зовут <?=$name?><br>
    Мне <?=$age?> лет<br>
<?php
    var_dump($name, $age);
    unset($name, $age);
?>
</body>
</html>