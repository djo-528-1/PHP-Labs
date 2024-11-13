<?php declare(strict_types=1);
    $now = time();
    $hour = getdate($now)['hours'];
    if ($hour >= 0 && $hour < 6)
        $welcome = 'Доброй ночи';
    elseif ($hour >= 6 && $hour < 12)
        $welcome = 'Доброе утро';
    elseif ($hour >= 12 && $hour < 18)
        $welcome = 'Добрый день';
    elseif ($hour >= 18 && $hour < 23)
        $welcome = 'Добрый вечер';
    else
        $welcome = 'Доброй ночи';
?>