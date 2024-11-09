<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap</title>
</head>
<body>
    <h1>Функция swap</h1>
<?php
    /**
     * Обмен значений между двумя переменными
     * @param int $a первая переменная
     * @param int $b вторая переменная
     * @return void
     */
    function swap (int &$a, int &$b)
    {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    echo '<h2>Замена значений</h2>';
    $var1 = 5;
    $var2 = 15;
    echo 'Перед заменой. var1=' . $var1 .' var2='. $var2, '<br>';
    swap ($var1, $var2);
    echo 'Сравнение 5 с var2: ';
    var_export(5=== $var2);
    echo '<br>';
    echo 'Сравнение 15 с var1: ';
    var_export(15=== $var1);
?>
</body>
</html>