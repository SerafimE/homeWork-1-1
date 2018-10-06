<?php declare(strict_types=1);

$name = 'Сергей';
$age = 41;
$email = 'c_76@bk.ru';
$city = 'Санкт-Петербург';
$about = 'Начинающий Веб-разработчик';

//================================//

function number($x)
{
    $first = $second = 1;
    do {
        $third = $first;
        $first += $second;
        $second = $third;
        if (($first == $x) || ($x == 1)) {
            return true;
        } elseif ($first > $x) {
            return false;
        }
    } while ($first < $x);
}

if (isset($_GET['number'])) {
    $num = $_GET['number'];
    $inNumberRow = "Задуманное число " . $num . " входит в числовой ряд";
    $notInNumberRow = "Задуманное число " . $num . " НЕ входит в числовой ряд";
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title><?php echo $name . ' _ ' . $about ?></title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<div>
    <h1>Страница пользователя Сергей Люляев</h1>
    <table>
        <tr>
            <td>Имя</td>
            <td><?php echo $name ?></td>
        </tr>
        <tr>
            <td>Возраст</td>
            <td><?php echo $age ?></td>
        </tr>
        <tr>
            <td>Адрес электронной почты</td>
            <td><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></td>
        </tr>
        <tr>
            <td>Город</td>
            <td><?php echo $city ?></td>
        </tr>
        <tr>
            <td>О себе</td>
            <td><?php echo $about ?></td>
        </tr>
    </table>
</div>
<hr>
<a href="https://goo.gl/8SdXcu" target="_blank"><h1>Числа Фибоначчи в Wikipedia</h1></a>
<hr>
<form action="index.php">
    <input type="number" placeholder="Введите число" name="number">
    <button type="submit">Проверить</button>
</form>

<?php if (isset($num)) : ?>
    <p><?php echo(number($num) ? $inNumberRow : $notInNumberRow); ?></p>
<?php endif; ?>
</body>

</html>