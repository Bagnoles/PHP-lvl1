/* Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты */

<?php
function getTime() {
    $minutes = date('i');
    $hours = date('H');
    if ($hours == 1 || $hours == 21) {
        $formatTime = "$hours час ";
    } else if ($hours >= 5 && $hours < 21 || $hours) {
        $formatTime = "$hours часов ";
    } else {
        $formatTime = "$hours часа ";
    }
    if ($minutes == 11) {
        return "$formatTime $minutes минут";
    }
    switch ($minutes % 10) {
        case 1:
            return "$formatTime $minutes минута";
        case 2:
        case 3:
        case 4:
            return "$formatTime $minutes минуты";
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
        case 0:
            return "$formatTime $minutes минут";
    }
}
