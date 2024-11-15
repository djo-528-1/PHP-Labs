<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
</head>
<body>
<?php
    $result = null;
    $num1 = '';
    $num2 = '';
    $operator = '+';
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $num1 = filter_input(INPUT_POST, 'num1', FILTER_VALIDATE_FLOAT);
        $num2 = filter_input(INPUT_POST, 'num2', FILTER_VALIDATE_FLOAT);
        $operator = filter_input(INPUT_POST, 'operator', FILTER_SANITIZE_SPECIAL_CHARS);
        if ($num1 === false || $num2 === false)
            $result = 'Ошибка: введите корректные числа!';
        else
        {
            switch ($operator)
            {
                case '+':
                    $result = $num1 + $num2;
                break;
                case '-':
                    $result = $num1 - $num2;
                break;
                case '*':
                    $result = $num1 * $num2;
                break;
                case '/':
                    if ($num2 == 0)
                        $result = 'Деление на ноль невозможно!';
                    else
                        $result = $num1 / $num2;
                break;
                default:
                    $result = 'Некорректный оператор!';
            }
        }
    }
    
    if ($result !== null)
        echo "<h3>Результат: $result</h3>";
?>
    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
        <p><label for="num1">Число 1</label><br>
        <input type="text" name="num1" id="num1" value="<?=$num1?>" required></p>
        <p><label for="operator">Оператор</label><br>
        <select name="operator" id="operator">
            <option value="+" <?=$operator=='+' ? 'selected' : ''?>>+</option>
            <option value="-" <?=$operator=='-' ? 'selected' : ''?>>-</option>
            <option value="*" <?=$operator=='*' ? 'selected' : ''?>>*</option>
            <option value="/" <?=$operator=='/' ? 'selected' : ''?>>/</option>
        </select></p>
        <p><label for="num2">Число 2</label><br>
        <input type="text" name="num2" id="num2" value="<?=$num2?>" required></p>
        <button type="submit">Считать!</button>
    </form>
</body>
</html>