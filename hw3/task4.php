/* Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк. */

<?php

$alphabet = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'yo',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'h',
        'ц' => 'c',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'sch',
        'ъ' => '`',
        'ы' => 'u',
        'ь' => '`',
        'э' => 'e',
        'ю' => 'yu',
        'я' => 'ya'
];

function translitiration ($string, $alphabet) {
    $stringTranslit = "";
    for ($i = 0; $i < strlen($string); $i++) {
        foreach($alphabet as $key => $value) {
            if ($key == $string[$i]) {
                $stringTranslit = $stringTranslit . $value;
            }
        }
    }
    return $stringTranslit;
}

$string = 'привет';
echo translitiration($string, $alphabet);