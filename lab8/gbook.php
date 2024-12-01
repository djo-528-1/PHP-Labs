<?php declare(strict_types=1);
    require_once 'config/config.php';
    $mysql_db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysql_db->connect_error)
        die('Connect error! '. $mysql_db->connect_error);
    $mysql_db->set_charset(DB_CHARSET);

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name = trim(htmlspecialchars($mysql_db->real_escape_string($_POST['name'])));
        $email = trim(htmlspecialchars($mysql_db->real_escape_string($_POST['email'])));
        $msg = trim(htmlspecialchars($mysql_db->real_escape_string($_POST['msg'])));
        
        $query_insert = "INSERT INTO msgs (name, email, msg) VALUES('$name', '$email', '$msg')";
        $mysql_db->query($query_insert);
        if ($mysql_db->errno)
            die('Error query insert: ' . $mysql_db->error);
        header('Location: ' . $_SERVER['PHP_SELF']);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id']))
    {
        $id = intval($_GET['id']);
        $query_delete = "DELETE FROM msgs WHERE id = $id";
        $mysql_db->query($query_delete);
        if ($mysql_db->errno)
            die('Error query delete: ' . $mysql_db->error);
        header('Location: ' . $_SERVER['PHP_SELF']);
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гостевая книга</title>
</head>
<body>
    <h1>Гостевая книга</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        Ваше имя:<br>
        <input type="text" name="name" required><br>
        Ваш E-mail:<br>
        <input type="email" name="email" required><br>
        Сообщение:<br>
        <textarea name="msg" cols="50" rows="5" required></textarea><br>
        <br>
        <input type="submit" value="Добавить!">
    </form>
<?php
    $query_select = "SELECT * FROM msgs ORDER BY id DESC";
    $result_select = $mysql_db->query($query_select);
    if ($mysql_db->errno)
        die('Error query select: ' . $mysql_db->error);
    $rows = $result_select->num_rows;
    echo 'Кол-во записей в гостевой книге: ' . $rows . '<br>';
    while ($row = $result_select->fetch_assoc())
    {
        echo "<hr><p>Имя пользователя: <a href='mailto:{$row['email']}'>{$row['name']}</a> Сообщение: {$row['msg']}</p>";
        echo "<div align='right'><a href='gbook.php?id=" . $row['id'] . "'>Удалить</a></div>";
    }
    $mysql_db->close();
?>
</body>
</html>