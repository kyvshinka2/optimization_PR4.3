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
    <title>Mase - Каталог</title>
    <!-- <description>Не хватает уюта и тепла? Заходи к нам и приобретай самые уютные и милые товары для дома, которые могут быть не только красивые, но и полезные</description> -->
    <link rel="stylesheet" href="../style/base.css">
    <link rel="stylesheet" href="../style/katalog.css">
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

        <div class="block-o">
            <?php
                $queryPlan = "SELECT `Name`, `Link`, `Price` FROM `Product`";
                $zaprPlan = $mysql->query($queryPlan);
                while ($row3 = mysqli_fetch_array($zaprPlan)) {
                    $Name = $row3['Name'];
                    $Link = $row3['Link'];
                    $Price = $row3['Price'];
                    // доп значения для структуры
                    $class1 = "plan-block";
                    $class2 = "img";
                    $class3 = "content-2";
                    $class4 = "btn";
                    $class5 = "plan";
                    $linkA = "#forma-plan";
                    $type = "button";
                    $value = "Заказать";

                    echo "<div class=".$class1.">";
                        echo "<div class=".$class2.">";
                            echo "<img src=".$Link.">";
                        echo "</div>";
                        echo "<div class=".$class3.">";
                            echo "<h1>".$Name."</h1>";
                            echo "<p>".$Price."</p>";
                            echo "<a href=".$linkA."><input type=".$type." value=".$value."></a>";
                        echo "</div>";
                    echo "</div>";
                }
    ?>
    </div>
</div>
</body>

</html>