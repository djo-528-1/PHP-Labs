<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица умножения</title>
    <style>
        table
        {
            border: 2px solid black;
            border-collapse: collapse;
        }
        th, td
        {
            padding: 10px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Таблица умножения</h1>
<?php
$count = 0;
/**
 * Отрисовка таблицы умножения
 * @param int $cols Кол-во колонок
 * @param int $rows Кол-во строк
 * @param string $color Цвет для заглавных ячеек
 * @return int Кол-во вызовов функции
 */
function getTable (int $cols=3, int $rows=3, string $color='navy')
{
    static $count = 0;
    $count++;
    echo '<table>';
    echo '<tr>';
    for ($i = 1; $i <= $cols; $i++)
        echo '<th style="background-color: '. $color . ';">', $i, '</th>';
    echo '</tr>';
    for ($i = 2; $i <= $rows; $i++)
    {
        echo '<tr>';
        echo '<th style="background-color: '. $color . ';">', $i, '</th>';
        for ($j = 2; $j <= $cols; $j++)
            echo '<td>', $i * $j, '</td>';
        echo '</tr>';
    }
    echo '</table>', '<br>';
    return $count;
}
getTable(10, 10, 'cornflowerblue');
getTable(7, 7, 'red');
getTable(4, 4, 'darkviolet');

getTable();
getTable(5);
$count = getTable(5, 5);
echo '<br>' . 'Кол-во вызовов функции getTable() = ' . $count;
?>
</body>
</html>