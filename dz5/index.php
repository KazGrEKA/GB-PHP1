<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Photo Gallery</title>
</head>

<body>
    <header>
        <h1>Photo Gallery</h1>
    </header>
    <div class="gallery">
        <?php
                include_once("config.php");

                $sql = "SELECT * FROM gallery";
                $table = mysqli_query($connect, $sql);

                while ($data = mysqli_fetch_assoc($table)) : ?>
                    <a href='image.php?id=<?= $data['id'] ?>' class='product'>
                        <img class="product_img" src='<?= $data['thumb_path'] ?>' alt='img"<?= $data['title'] ?>'>
                    </a>
                <?php endwhile; ?>
    </div>
</body>

</html>
