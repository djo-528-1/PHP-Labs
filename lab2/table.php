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
        th
        {
            background-color: cornflowerblue;
        }
    </style>
</head>
<body>
    <h1>Таблица умножения</h1>
    <table>
<?php
$cols = 10;
$rows = 10;
echo '<tr>';
for ($i = 1; $i <= $cols; $i++)
    echo '<th>', $i, '</th>';
echo '</tr>';

for ($i = 2; $i <= $rows; $i++)
{
    echo '<tr>';
    echo '<th>', $i, '</th>';
    for ($j = 2; $j <= $cols; $j++)
        echo '<td>', $i * $j, '</td>';
    echo '</tr>';
}
?>
</table>
</body>
</html>