/* Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку. */

<?php
function changeString ($string) {
    $changedString = str_replace(' ', '_', $string);
    return $changedString;
}
