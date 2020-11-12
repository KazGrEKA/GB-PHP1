<?php
	//1. Создать галерею фотографий. Она должна состоять из одной страницы, на которой пользователь видит все картинки в уменьшенном виде. При клике на фотографию она должна открыться в браузере в новой вкладке. Размер картинок можно ограничивать с помощью свойства width.
	$dir1 = "gallery/images";
    $dir2 = "gallery/thumbs";
    $files = array_slice(scandir($dir1), 2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1>Photo Gallery</h1>
    </header>
    <div class="gallery">
        <?php for ($i=0; $i < count($files); $i++) : ?>
        <a href="<?=$dir1."/".$files[$i] ?>">
            <img src="<?=$dir2."/".$files[$i] ?>">
        </a>
        <?php endfor; ?>
    </div>
</body>

</html>
