<?php declare(strict_types=1);

$name = 'Сергей';
$surname = 'Люляев';
$age = 41;
$email = 'c_76@bk.ru';
$city = 'Санкт-Петербург';
$about = 'Начинающий Веб-разработчик';

function fibonacci($x)
{
    $first = $second = 1;
    do {
        $third = $first;
        $first += $second;
        $second = $third;
        if ($first == $x || $x == 1) {
            return true;
        } elseif ($first > $x) {
            return false;
        }
    } while ($first < $x);
    return $x;
}

if (isset($_POST['number'])) {
    $x = $_POST['number'];
    $yes = "Ведённое число $x входит в числовой ряд!";
    $no = "Ведённое число $x НЕ входит в числовой ряд!";
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
<h1>Страница пользователя <?php echo "$name $surname" ?></h1>
<img src="https://pp.userapi.com/c840239/v840239323/6c98e/HNG47eps4Xc.jpg" alt="<?php echo "$name $surname" ?>">
<table>
    <tr>
        <td>Имя</td>
        <td><?php echo $name ?></td>
    </tr>
    <tr>
        <td>Фамилия</td>
        <td><?php echo $surname ?></td>
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
<a href="https://goo.gl/8SdXcu" target="_blank"><h2>Числа Фибоначчи на wikiwand</h2></a>
<form action="dz_1_2.php" method="post">
    <input type="number" placeholder="Введите число" name="number">
    <button type="submit">Проверить</button>
</form>
<p>
    <?php if (isset($x)) {
        echo(fibonacci($x) ? $yes : $no);
    } ?>
</p>
</body>
</html>
