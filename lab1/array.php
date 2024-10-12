<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массивы</title>
</head>

<body>
<?php
    $bmw = [
        'model' => 'X5',
        'speed, km/h' => '120',
        'doors' => '5',
        'year' => '2006',
    ];
    $toyota = [
        'model' => 'Carina',
        'speed, km/h' => '130',
        'doors' => '4',
        'year' => '2007',
    ];
    $opel = [
        'model' => 'Corsa',
        'speed, km/h' => '140',
        'doors' => '5',
        'year' => '2007',
    ];

    echo $bmw['model'].'-'.$bmw['speed, km/h'].'-'.$bmw['doors'].'-'.$bmw['year'], '<br>', PHP_EOL;
    echo $toyota['model'].'-'.$toyota['speed, km/h'].'-'.$toyota['doors'].'-'.$toyota['year'], '<br>', PHP_EOL;
    echo $opel['model'].'-'.$opel['speed, km/h'].'-'.$opel['doors'].'-'.$opel['year'], '<br>', PHP_EOL;
    echo 'Альтернативный вариант вывода через интерполяцию строк:', '<br>', PHP_EOL;
    echo "{$bmw['model']}-{$bmw['speed, km/h']}-{$bmw['doors']}-{$bmw['year']}", '<br>', PHP_EOL;
    echo "{$toyota['model']}-{$toyota['speed, km/h']}-{$toyota['doors']}-{$toyota['year']}", '<br>', PHP_EOL;
    echo "{$opel['model']}-{$opel['speed, km/h']}-{$opel['doors']}-{$opel['year']}", '<br>', PHP_EOL;
?>
</body>
</html>