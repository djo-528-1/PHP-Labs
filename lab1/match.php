<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Конструкция match</title>
</head>

<body>
<?php
    $day = 4;
    $out_match = match ($day)
    {
        1, 2, 3, 4, 5 => 'Это рабочий день',
        6, 7 => 'Это выходной день',
        default => 'Неизвестный день',
    };
    echo $out_match;
?>
</body>
</html>