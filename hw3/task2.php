/* С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
0 – ноль.
1 – нечетное число.
2 – четное число.
3 – нечетное число.
…
10 – четное число. */

<?php
$i = 0;
do {
    if ($i == 0) {
        echo "$i - ноль.";
    } else if ($i % 2 == 0) {
        echo "$i - четное число.";
    } else {
        echo "$i - нечетное число.";
    }
    $i++;
} while ($i <= 10);