<?php declare(strict_types=1);
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