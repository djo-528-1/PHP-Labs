<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Константы</title>
</head>

<body>
    <?php
    const VOLVO = 'Volvo 850';
    define("AUDI",'Audi 100');
    if (defined("VOLVO"))
        echo 'Константа существует. Вот её значение: '.VOLVO.PHP_EOL;
    else
        echo 'Константа не существует'.PHP_EOL;
    if (defined("AUDI"))
        echo 'Константа существует. Вот её значение: '.AUDI.PHP_EOL;
    else
        echo 'Константа не существует'.PHP_EOL;
    echo 'Текущая версия PHP: '.PHP_VERSION.PHP_EOL;
    echo 'Дирекория скрипта: '.__DIR__.PHP_EOL;
    ?>
</body>
</html>