<?php
declare(strict_types=1);
//echo "Hello HEROKU 2<br />";
///echo 'I\'m alive!';

echo "Hello HEROKU";


session_start();
$content = [];

if (!$_SESSION['user']) {
    $content['msg'] = "<br>Вы не авторизованы <br>";
    $content['form'] = true;
} else {
    $content['msg'] = "Пользователь: {$_SESSION['user']['name']}";
    $content['form'] = false;
}
include_once 'about-author.php';
