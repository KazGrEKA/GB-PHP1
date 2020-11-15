<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Photo Gallery</title>
</head>

<body>
    <header>
        <h1>Gallery image</h1>
    </header>
    <div class="image_big">
        <a href="index.php">Вернуться назад</a><br><br><br>

                <?php
                include_once("config.php");

                $idImage = $_GET['id'];
                $sqlImg = "SELECT * FROM gallery WHERE id='$idImage'";
               
                

                if (mysqli_query($connect, $sqlImg)) {
                    $image = mysqli_fetch_assoc(mysqli_query($connect, $sqlImg));
                }
                ?>

                <img src="<?= $image['image_path'] ?>" alt="image<?= $idImage ?>">
    </div>
</body>

</html>
