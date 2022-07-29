<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ну, например, СИЛУШКА.</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
        <div class="header__left">
                <a href="http://localhost" class="logo__main">СИЛУШКА</a>
                <a href="http://localhost" class="logo__sub"><br>ФИТНЕС-КЛУБ</a>
        </div>
        <div class="header__right">
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__list-items">
                        <a class="nav__link" href="#">Главная</a>
                    </li>
                    <li class="nav__list-items">
                        <a class="nav__link" href="#">Стоимость</a>
                    </li>
                    <li class="nav__list-items">
                        <a class="nav__link" href="#">Расписание</a>
                    </li>
                    <li class="nav__list-items">
                        <a class="nav__link" href="#">Контакты</a>
                    </li>
                </ul>
            </nav>
            <button class="btn  btn--blue  btn--small" type="button">Оставить<br>заявку</button>
        </div>
    </div>
    <?php
        include ('php/bd.php');
    ?>
    <div class="footer"></div>
</body>
</html>
