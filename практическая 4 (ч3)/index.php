<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mase - товары для дома</title>
    <!-- <description>Не хватает уюта и тепла? Заходи к нам и приобретай самые уютные и милые товары для дома, которые могут быть не только красивые, но и полезные</description> -->
    <link rel="stylesheet" href="./style/base.css">
</head>

<body>
    <?php
        session_start();
        require('php/header.php')
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
            <h1>Немного о нас</h1>
            <div class="border-block-o-nas">
                <h3>Mase</h3>
                <p>– бренд эмоциональных товаров, которые воодушевляют людей. Мы призываем выражать чувства через подарки близким, друзьям и самим себе.</p>
                <p>Мы любим общаться с вами каждый день, но больше всего ценим, когда вы приходите за товарами, которые сблизят вас ещё больше с значимыми исключительно для вас людьми. Для каждого из нас жизненно важно быть рядом с родителями, детьми, любимыми
                    или друзьями. Мы создаём товары, которые помогают вам налаживать контакт и каждый день делиться теплом и позитивными эмоциями.</p>
                <a href="./page/otzav.php">Читать отзывы</a>
            </div>
        </div>
    </div>
</body>

</html>