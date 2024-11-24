<?php declare(strict_types=1);
    const COOKIE_TIME = 60*60*24;
    $visits = 1;
    $lastVisit = 'У вас пока не было посещений';
    if (isset($_COOKIE['visits']))
        $visits = $_COOKIE['visits'] + 1;
    if(isset($_COOKIE['lastVisit']))
    {
        $lastVisit = htmlspecialchars(trim($_COOKIE['lastVisit']));
    }
    setcookie('visits', (string) $visits, time() + COOKIE_TIME);
    setcookie('lastVisit', date('d-m-Y H:i:s'), time() + COOKIE_TIME);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Последний визит</title>
</head>
<body>
    <h1>Последний визит</h1>
<?php
    if ($visits == 1)
        echo 'Добро пожаловать первый раз на сайт' . '<br>';
    else
        echo 'Ваше кол-во посещений страницы за сутки: ' . $visits . '<br>';
    echo 'Ваше последнее посещение: ' . $lastVisit . '<br>'
?>
</body>
</html>