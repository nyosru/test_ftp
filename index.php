<?php



require_once './index.memcache.php';


require_once './includes/class/Uri.php';

// тест вызов
$e = \Uri::parseUri('https://habr.com/ru/post/56289/');

// вывод результата
echo '<pre>';
print_r($e);
echo '</pre>';
