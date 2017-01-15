<?php

// Создайте массив $date с пятью элементами

$date = [];

//C помощью генератора случайных чисел забейте массив $date юниксовыми метками

mt_srand(time()); 
$date[] = mt_rand();
$date[] = mt_rand();
$date[] = mt_rand();
$date[] = mt_rand();
$date[] = mt_rand();
print_r($date);

//Сделайте вывод сообщения на экран о том, какой день в сгенерированном массиве получился наименьшим, а какой месяц наибольшим

$days = [];

$days[] = date('j', $date[0]);
$days[] = date('j', $date[1]);
$days[] = date('j', $date[2]);
$days[] = date('j', $date[3]);
$days[] = date('j', $date[4]);

$mont = [];

$mont[] = date('n', $date[0]);
$mont[] = date('n', $date[1]);
$mont[] = date('n', $date[2]);
$mont[] = date('n', $date[3]);
$mont[] = date('n', $date[4]);

echo '<br/>';
echo 'Наименьший день - '.min($days).'<br/>';
echo 'Наибольший месяц - '.max($mont).'<br/>';

//Отсортируйте массив по возрастанию дат

sort($date);

//С помощью функция для работы с массивами извлеките последний элемент массива в новую переменную $selected

$selected = array_pop($date);

//C помощью функции date() выведите $selected на экран в формате "дд.мм.ГГ ЧЧ:ММ:СС"

echo date('d:m:y H:i:s', $selected).'<br/>';


//Выставьте часовой пояс для Нью-Йорка, и сделайте вывод снова, чтобы проверить, что часовой пояс был изменен успешно

date_default_timezone_set('America/New_York');
echo date('d.m.Y H:i:s',$selected);

?>
