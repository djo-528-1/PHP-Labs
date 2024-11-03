<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меню</title>
    <style>
        .menu
        {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        .vertical li
        {
            display: inline;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Меню</h1>
<?php
    /**
     * Отрисовка меню
     * @param array $menu Массив, содержащий элементы меню
     * @param bool $vertical Вертикальное (по умолчанию) или горизонтальное отображение меню
     * @return void
     */
    function getMenu (array $menu, bool $vertical = true)
    {
        if ($vertical)
            echo '<ul class="menu">';
        else
            echo '<ul class="menu vertical">';
        foreach ($menu as $key)
        {
            echo '<li><a href="'. $key['href'] .'">'. $key['link'] . '</a></li>';
        }
        echo '</ul>';
    }

    $leftMenu = [
        ['link' => 'Домой', 'href' => 'index.php',],
        ['link' => 'О нас', 'href' => 'about.php',],
        ['link' => 'Контакты', 'href' => 'contact.php',],
        ['link' => 'Таблица умножения', 'href' => 'table.php',],
        ['link' => 'Калькулятор', 'href' => 'calc.php',]];
    
        getMenu($leftMenu);
        echo '<br>';
        getMenu($leftMenu, false);
?>
</body>
</html>