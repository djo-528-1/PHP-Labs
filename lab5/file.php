<?php declare(strict_types=1);
    define('FILENAME', 'db/users.txt');
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['fname'], $_POST['lname']) && !empty($_POST['fname']) && !empty($_POST['lname']))
    {
        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);
        $line = "$fname $lname\n";
        file_put_contents(FILENAME, $line, FILE_APPEND);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Работа с файлами</title>
</head>
<body>
    <h1>Заполните форму</h1>
    <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
        Имя: <input type="text" name="fname"><br>
        Фамилия: <input type="text" name="lname"><br>
        <br>
        <input type="submit" value="Отправить!">
    </form>
<?php
    if(file_exists(FILENAME))
    {
        $lines = file(FILENAME, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $lineNumber => $line)
            echo ($lineNumber + 1) . '. ' . htmlspecialchars($line) . "<br>";
        echo "<br>Размер файла: " . filesize(FILENAME) . ' байт.';
    }
?>
</body>
</html>