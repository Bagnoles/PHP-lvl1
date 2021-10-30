<?php
session_start();
foreach ($_POST as $index=>$item) {
    if (isset($_SESSION[$index])) {
        $_SESSION[$index]++;
    } else {
        $_SESSION[$index] = 1;
    }
}
?>
<p>Товар добавлен в корзину.</p>
<a href="index.php">На главную</a>
<a href="basket.php">В корзину</a>
