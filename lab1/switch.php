<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Конструкция switch</title>
</head>

<body>
    <?php
    $day = 4;
    switch ($day)
    {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo 'Это рабочий день';
            break;
        case 6:
        case 7:
            echo 'Это выходной день';
            break;
        default:
            echo 'Неизвестный день';
    }
    ?>
</body>
</html>