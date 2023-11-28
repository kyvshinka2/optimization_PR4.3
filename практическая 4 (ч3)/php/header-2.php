<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mase - товары для дома</title>
    <link rel="stylesheet" href="./style/base.css">
</head>

<body>
<?php
session_start();
?>
    <div class="header-nav">
        <nav>
            <a href="../index.php">Главная</a>
            <a href="./otzav.php">О_нас</a>
            <a href="./katalog.php">Каталог</a>
            <a href="./autor.php">Войти</a>
            <a href="./kabinet.php">Кабинет</a>
            <?php
                if ($_SESSION ['nameAdmin']) {
                    $linkAdmin = "./admin.php";
                    $text = "Админ";
                    echo "<a href=".$linkAdmin.">".$text."</a>";
                }
            ?>
        </nav>
    </div>
</body>

</html>