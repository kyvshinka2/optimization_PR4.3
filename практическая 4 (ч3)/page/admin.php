<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Администратор</title>
    <!-- <description>Не хватает уюта и тепла? Заходи к нам и приобретай самые уютные и милые товары для дома, которые могут быть не только красивые, но и полезные</description> -->
    <link rel="stylesheet" href="../style/base.css">
    <link rel="stylesheet" href="../style/admin.css">
    <script src="../js/code.jquery.com_jquery-3.7.1.min.js"></script>
</head>
<?php
session_start();
?>
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

        <div class="block-o-nas">
            <h1>Здравствуйте, <?php echo $_SESSION['nameAdmin']; ?></h1>
        </div>
        
        <!-- добавление товара -->
        <div class='addProduct_form'>
            <h1>Добавить товар</h1>
            <form action="../php/addProduct.php" method="post">
                <input class="inp-text" type="text" name="image" placeholder='Путь к фото'><br><br>
                <input class="inp-text" type="text" name="title" placeholder='Название'><br><br>
                <input class="inp-text" type="text" name="price" placeholder='Цена'><br><br>
                <input type="submit" value="Добавить">
            </form>
        </div>
        <br>

        <!-- лист изменения товара -->
        <div class="products-list">
        <?php
            require("../php/connection.php");
            $sql = "SELECT * FROM Product;";
            if($result = $mysql->query($sql))
            {
                foreach ($result as $row) {
                    echo "<div class='product-item'>";
                       echo "<form action='../php/changeProduct.php' method='POST'>";
                            echo "<input type='text' name='product_id' hidden value='".$row['ID']."'/>";
                            echo "<img src='".$row['Link']."'/>";
                            echo "<div>";
                                echo "<p class='title'>".$row['Name']."</p>";
                                echo "<input class='price_data' name='price' type='text' value='".$row['Price']."'/>";
                            echo "</div>";
                            echo "<input type='submit' name='remove' class='from-cart' value='Удалить'/>";
                            echo "<input type='submit' name='change' class='to-cart' value='Изменить'/>";
                        echo "</form>";
                    echo "</div>";
                }
            }
        ?>
    </div>

    <br>
        <!-- выход, закрытие сессии -->
        <div class="exit">
        <a id="show" href="./exitAdmin.php">Выйти</a>
        </div>  
    </div>
</body>

</html>