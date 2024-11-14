<?php declare(strict_types=1);
    $message = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $to = "prostopochta22848xd@gmail.com";
        $from = "admin@center.ogu";
        $headers = "From: $from\r\n" . "Reply-To: $from\r\n" . "Content-Type: text/plain; charset=utf-8";
        
        if (mail($to, $subject, $body, $headers))
            $message = "<p>Сообщение успешно отправлено!</p>";
        else
            $message = "<p>Произошла ошибка при отправке сообщения.</p>";
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
</head>
<body>
    <section>
        <h1>Обратная связь</h1>
        <h3>Адрес</h3>
        <address>123456 Москва, Малый Американский переулок 21</address>
        <h3>Задайте вопрос</h3>
        <form action='' method='post'>
            <label>Тема письма: </label>
            <br>
            <input name='subject' type='text' size="50">
            <br>
            <label>Содержание: </label>
            <br>
            <textarea name='body' cols="50" rows="10"></textarea>
            <br>
            <br>
            <input type='submit' value='Отправить'>
        </form>
    </section>
</body>
</html>