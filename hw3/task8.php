/* *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К». */

<?php
$districts = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Шацк', 'Касимов']
];

foreach ($districts as $key => $value) {
    echo "$key: ";
    foreach ($value as $item) {
        if (mb_substr($item, 0, 1, 'UTF-8') == 'К') {
            echo "$item ";
        }
    }
}