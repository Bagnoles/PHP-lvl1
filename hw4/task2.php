<html>
<head>
</head>
<body>
<?php
$images = scandir('img');
foreach ($images as $image) {
    if (is_file('img/' . $image)) {
        ?> <a href="/img/<?php echo $image; ?>" target="_blank">
            <img src="/img/<?php echo $image; ?>" width = "400">
        </a>
 <?php   }
} ?>
</body>
</html>