/* Объединить две ранее написанные функции в одну, которая получает строку на русском языке,
производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах). */

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
    'я' => 'ya',
    ' ' => ' '
];

function transformString ($string, $alphabet) {
    $stringTransformed = '';
    for ($i = 0; $i < mb_strlen($string); $i++) {
        foreach($alphabet as $key => $value) {
            if ($key == mb_substr($string, $i, 1, 'UTF-8')) {
                $stringTransformed .= $value;
            }
        }
    }
    $stringTransformed = str_replace(' ', '_', $stringTransformed);
    return $stringTransformed;
}

