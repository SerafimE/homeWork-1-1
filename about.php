<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 22.06.2018
 * Time: 19:42
 */

$name = 'Сергей';
$age = 41;
$email = 'c_76@bk.ru';
$city = 'Санкт-Петербург';
$about = 'Начинающий Веб-разработчик';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title><?php echo $name . ' – ' . $about ?></title>
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
</body>

</html>
