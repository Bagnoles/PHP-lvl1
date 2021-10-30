<?php
session_start();
?>
<h3>Корзина</h3>
<?php
foreach($_SESSION as $index=>$value) {
    $imgNum = substr($index, -1, 1);
    echo "<img src='img/image$imgNum.jpg' width='100'><p> - $value шт.</p><br>";
}
?>
<a href="index.php">На главную</a>
