<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Цикл for</title>
</head>
<body>
    <h1>Цикл for</h1>
<?php
    /**
     * Этот код возращает нечётные значения от 1 до 50-
     * @return string нечётные числа от 1 до 50
     */
    function oddInteger ()
    {
        $out = "";
        for ($i=1; $i < 50; $i++)
        {
            if ($i %2 != 0)
            {
                $out .= "$i<br>";
            }
        }
        return $out;
    }
    echo oddInteger();
?>
</body>
</html>