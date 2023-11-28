<!DOCTYPE html>
<html lang="en">
<!-- подключение к бд -->
<?php
// подключение к бд
$mysql = new mysqli('localhost', 'root', '', 'Mase');
$mysql->set_charset('utf8');
if($mysql->connect_error){
    die("Ошибка: " . $mysql->connect_error);
    exit();
} 
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mase - товары для дома</title>
    <!-- <description>Не хватает уюта и тепла? Заходи к нам и приобретай самые уютные и милые товары для дома, которые могут быть не только красивые, но и полезные</description> -->
    <link rel="stylesheet" href="../style/base.css">
</head>

<body>
    <?php
        session_start();
        require('../php/header-2.php')
    ?>
    <div class="content">
        <div class="shape-name-logo">
            <div>
                <h1 class="Mase">Mase</h1>
            </div>
            <div>
                <input class="poisk" type="text" name="poisk" id="poisk" placeholder="Поиск">
            </div>
            <div>
                <input class="korzina" type="button" value="Корзина">
            </div>
        </div>

         <!-- форма для заполнения -->
    <form class="form" action="./otzav2.php" method="post">
        <input type="text" class="form-inp" name="login" id="login" placeholder="Введите логин"><br>
        <input type="text" class="form-inp-2" name="content" id="content" placeholder="Введите отзыв"><br>
        <input type="submit" class="batton" value="Отправить">
    </form><br>

        <div class="block-o-nas">
            <h1>Отзывы</h1>
            <?php
                $queryOtzav = "SELECT `User`, `Comment` FROM `Otzav`";
                $zaprOtzav = $mysql->query($queryOtzav);
                while ($row3 = mysqli_fetch_array($zaprOtzav)) {
                    $User = $row3['User'];
                    $Comment = $row3['Comment'];
                    // доп значения для структуры
                    $class1 = "otzav-2";

                    // вывод
                    echo "<div>";
                        echo "<h3>".$User."</h3>";
                        echo "<p>".$Comment."</p>";
                    echo "</div>";
                }
            ?>
        </div>
        </div>
    </div>
</body>

</html>