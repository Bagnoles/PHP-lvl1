<html>
<head>
</head>
<body>
<?php
require_once 'db.php';
if (!$link) {
    die('error connecting to database');
}
$images = mysqli_query($link, "SELECT * FROM images ORDER BY viewed DESC");
while ($row = mysqli_fetch_assoc($images)) {

    echo '<a href="fullimage.php?image_id=' . $row[id] . '" target="_blank">'; ?>
        <img src="<?php echo $row[image_path]; ?>" width = "400">
    </a>
    <p>Количество просмотров: <?php echo $row[viewed]; ?></p>
<?php }
?>
</body>
</html>