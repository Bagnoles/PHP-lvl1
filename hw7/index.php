<?php
session_start();
?>
<html>
<head>
</head>
<body>
<img src="img/image1.jpg" alt="Product1" width="300">
<form action="addProduct.php" method="post">
    <input type="submit" name="product1" value="Добавить в корзину">
</form>
<img src="img/image2.jpg" alt="Product2" width="300">
<form action="addProduct.php" method="post">
    <input type="submit" name="product2" value="Добавить в корзину">
</form>
<img src="img/image3.jpg" alt="Product3" width="300">
<form action="addProduct.php" method="post">
    <input type="submit" name="product3" value="Добавить в корзину">
</form>
<a href="basket.php">Посмотреть содержимое корзины</a>
</body>
</html>