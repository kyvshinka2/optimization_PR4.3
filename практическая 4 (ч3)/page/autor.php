<!DOCTYPE html>
<html lang="en">

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

        <div class="block-o-nas">
            <!-- регистрация, авторизация -->
    <div class="container text-align-reg">
        <form action="../php/autor.php" method="post">
            <input type="text" class="form-inp" name="login" id="login" placeholder="Введите логин:"><br>
            <input type="password" class="form-inp" name="password" id="password" placeholder="Введите пароль:"><br>
            <input type="submit" class="batton" value="Войти">

            <p>Если не зарегистрированы, то <b><a href="./registr.php">Зарегистрируйтесь</a></b></p>
        </form>
    </div>
        </div>
    </div>
</body>

</html>