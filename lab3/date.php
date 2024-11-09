<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Использование функций даты и времени</title>
</head>
<body>
    <h1>Использование функций даты и времени</h1>
<?php
    $now = time();
    $birthday = mktime(0, 0, 0, 1, 1, (int)date('Y'));
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
    echo $welcome . '<br>';
    setlocale(LC_ALL, 'ru_RU.UTF-8');
    $format = datefmt_create(null, IntlDateFormatter::FULL, IntlDateFormatter::FULL, 'Europe/Moscow', IntlDateFormatter::GREGORIAN, 'dd MMMM yyyy года, EEEE HH:mm:ss');
    echo 'Сегодня' . datefmt_format($format, $now) . '<br>';
    $birthday_new = getdate($birthday);
    if ($birthday < $now)
    {
        $birthday = mktime($birthday_new['hours'], $birthday_new['minutes'], $birthday_new['seconds'], $birthday_new['month'], $birthday_new['day'], (int)date('Y')+1);
    }
    $remain_birthday = $birthday - $now;
    $day_birthday = floor($remain_birthday / (60*60*24));
    $remain_birthday %= 60*60*24;
    $hour_birthday = floor($remain_birthday / (60*60));
    $remain_birthday %= 60*60;
    $minutes_birthday = floor($remain_birthday / 60);
    $seconds_birthday = $remain_birthday % 60;
    echo 'До дня рождения осталось: ' . $day_birthday . ' дней, ' . $hour_birthday . ' часов, ' . $minutes_birthday . ' минут, ' . $seconds_birthday . ' секунд.';
?>
</body>
</html>