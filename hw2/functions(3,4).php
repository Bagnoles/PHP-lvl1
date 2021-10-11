<?php
function sum($a, $b) {
    return $a + $b;
}
function sub($a, $b) {
    if ($a > $b) {
        return $a - $b;
    } else {
        return $b - $a;
    }
}
function mult($a, $b) {
    return $a * $b;
}
function div($a, $b) {
    return $a / $b;
}

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'умножение':
            return mult($arg1, $arg2);
            break;
        case 'деление':
            return div($arg1, $arg2);
            break;
        case 'сложение':
            return sum($arg1, $arg2);
            break;
        case 'вычитание':
            return sub($arg1, $arg2);
            break;
    }
}