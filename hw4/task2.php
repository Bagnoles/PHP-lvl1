<?php
$images = scandir('/img');
?>
<html>
<head>
</head>
<body>
<?php
foreach ($images as $image) {
    if (is_file('/images' . $image)) {
        ?> <a href=<?php $image ?>target="_blank"><img src=<?php $image ?> width = "400"></a>
    }
}
</body>
</html>