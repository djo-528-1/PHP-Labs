<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Имена функций загруженного модуля</title>
</head>
<body>
<?php
    $loaded_extensions = get_loaded_extensions();
    foreach ($loaded_extensions as $elem)
    {
        echo $elem;
        print_r(get_extension_funcs($elem));
        echo '<br>';
    }
?>
</body>
</html>