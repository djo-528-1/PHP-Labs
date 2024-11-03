<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Цикл while</title>
</head>
<body>
    <h1>Цикл while</h1>
<?php
    /**
     * Разбиение строки и вывод её в столбик
     * @return string Начальная строка выводимая в столбик
     */
    function lineBreak ()
    {
        $i = 0;
        $var = 'HELLO';
        $out = "";
        while ($i < strlen($var))
        {
            $out .= "$var[$i]<br>";
            $i++;
        }
        return $out;
    }
    echo lineBreak();
?>
</body>
</html>