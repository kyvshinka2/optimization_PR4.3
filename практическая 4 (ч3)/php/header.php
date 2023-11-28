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
            <a href="./index.php">Главная</a>
            <a href="./page/otzav.php">О_нас</a>
            <a href="./page/katalog.php">Каталог</a>
            <a href="./page/autor.php">Войти</a>
            <a href="./page/kabinet.php">Кабинет</a>
            <?php
                if ($_SESSION ['nameAdmin']) {
                    $linkAdmin = "./page/admin.php";
                    $text = "Админ";
                    echo "<a href=".$linkAdmin.">".$text."</a>";
                }
            ?>
        </nav>
    </div>
</body>

</html>