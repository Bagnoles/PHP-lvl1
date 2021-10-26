<html>
<body>
<h1>Отзывы покупателей</h1>
<form action="index.php" method="post">
    <textarea name="reviews" cols="30" rows="10"></textarea><br>
    <input type="submit" value="Отправить отзыв">
</form>
<?php
$link = mysqli_connect('localhost', 'root', 'board', 'reviews');
$reviews = mysqli_query($link, 'SELECT * FROM reviews');
while ($row = mysqli_fetch_assoc($reviews)) {
    echo "<h3>Отзыв $row[id] </h3>";
    echo "<p>$row[review]</p>";
}
var_dump($_POST);
if (isset($_POST[reviews])) {
    $newReview = mysqli_real_escape_string($link, $_POST[reviews]);
    $sql = mysqli_query($link, "INSERT INTO reviews (review) VALUES ('$newReview');");
    if ($sql) {
        echo "Ваш отзыв добавлен.";
    }
}
?>
</body>
</html>
