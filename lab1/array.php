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
        'speed' => '120',
        'doors' => '5',
        'year' => '2006',
    ];
    $toyota = [
        'model' => 'Carina',
        'speed' => '130',
        'doors' => '4',
        'year' => '2007',
    ];
    $opel = [
        'model' => 'Corsa',
        'speed' => '140',
        'doors' => '5',
        'year' => '2007',
    ];

    echo $bmw['model'].'-'.$bmw['speed'].'-'.$bmw['doors'].'-'.$bmw['year'].PHP_EOL;
    echo $toyota['model'].'-'.$toyota['speed'].'-'.$toyota['doors'].'-'.$toyota['year'].PHP_EOL;
    echo $opel['model'].'-'.$opel['speed'].'-'.$opel['doors'].'-'.$opel['year'].PHP_EOL;
    ?>
</body>
</html>