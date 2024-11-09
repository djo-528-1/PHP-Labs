<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Все const в PHP</title>
</head>
<body>
    <pre>
<?php
    print_r(get_defined_constants(true));
?>
    </pre>
</body>
</html>