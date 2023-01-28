<!DOCTYPE html>
<html lang="ru" />
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="css/main.css" rel="stylesheet" />
    <link type="image/x-icon" rel="shortcut icon" href="assets/favicon/favicon.ico">
    <link sizes="32x32" rel="apple-touch-icon" href="assets/favicon/favicon-32x32.png">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>
    <title>Силушка &mdash; Фитнес-клуб в Севастополе</title>
</head>
<body class="bg-dark text-light">
<header class="mx-lg-0 sticky-top shadow" style="z-index: 1020;">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark px-3 px-md-5">
        <a href="#" class="navbar-brand fw-bold fst-italic fs-1 lh-sm text-warning">Силушка</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="navbar-nav me-0 me-md-4 text-center text-md-start fw-bold lh-base">
                <li class="nav-item ms-0 ms-md-4 mb-2 my-md-auto">
                    <a class="text-decoration-none link-light" href="#">Главная</a>
                </li>
                <li class="nav-item ms-0 ms-md-4 mb-2 my-md-auto">
                    <a class="text-decoration-none link-light" href="#">Тренеры</a>
                </li>
                <li class="nav-item ms-0 ms-md-4 mb-2 my-md-auto">
                    <a class="text-decoration-none link-light" href="#">Расписание</a>
                </li>
                <li class="nav-item ms-0 ms-md-4 mb-2 my-md-auto">
                    <a class="text-decoration-none link-light" href="#">Услуги</a>
                </li>
                <li class="d-none d-lg-block nav-item ms-0 ms-md-4 mb-2 mb-md-0">
                    <a class='btn btn-warning btn-lg rounded-pill text-decoration-none py-2 px-4 fw-bold lh-base fs-6' href="#">Записаться</a>
                </li>
            </ul>
            <a class='text-decoration-none p-0' data-bs-toggle="modal" href="#profileModal_log" role="button"><img class="nav__profile" src="assets/icons/user_profile.svg" alt="Sign In"></a>
        </div>
    </nav>
</header>
<main style="z-index: 1000;">
    <div class="modal fade" id="profileModal" aria-labelledby="profileModalLabel" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header justify-content-center border-0">
                    <h3 class="modal-title text-uppercase" id="profileModalLabel">Регистрация</h3>
                </div>
                <div class="modal-body pb-0">
                    <div class="container-fluid text-center">
                       <form class="justify-content-center" action="#" method="get">
                            <input type="text" class="form-control form-control-lg fs-6 mb-3 py-3 bg-success form-input-reglog" placeholder="ИМЯ" />
                            <input type="text" class="form-control form-control-lg fs-6 mb-3 py-3 form-input-reglog" placeholder="ФАМИЛИЯ" />
                            <input type="email" class="form-control form-control-lg fs-6 mb-3 py-3 form-input-reglog" placeholder="ПОЧТА" />
                            <input type="password" class="form-control form-control-lg fs-6 mb-3 py-3 form-input-reglog" placeholder="ПАРОЛЬ" />
                            <input type="password" class="form-control form-control-lg fs-6 mb-3 py-3 form-input-reglog" placeholder="ПОВТОРИТЕ ПАРОЛЬ" />
                            <input type="submit" class="btn btn-lg btn-warning fs-5 text-uppercase py-2 w-100 mt-4 rounded-pill" value="ЗАРЕГИСТРИРОВАТЬСЯ"/>
                       </form>
                    </div>
                </div>
                <div class="modal-footer pt-0 mt-0 border-0 justify-content-center text-center">
                    <p class="fs-6 text-uppercase pt-1 mb-4">Уже есть аккаунт? <a class="text-decoration-none link-warning" data-bs-target="#profileModal_log" data-bs-toggle="modal" data-bs-dismiss="modal" role="button">Войти</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="profileModal_log" aria-labelledby="profileModalLabel_log" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header justify-content-center border-0">
                    <h3 class="modal-title text-uppercase" id="profileModalLabel_log">Вход</h3>
                </div>
                <div class="modal-body pb-0">
                    <div class="container-fluid text-center">
                       <form class="justify-content-center" action="#" method="get">
                            <input type="email" class="form-control form-control-lg fs-6 mb-3 py-3 form-input-reglog" placeholder="ПОЧТА" />
                            <input type="password" class="form-control form-control-lg fs-6 mb-3 py-3 form-input-reglog" placeholder="ПАРОЛЬ" />
                            <input type="submit" class="btn btn-lg btn-warning fs-5 text-uppercase py-2 w-100 mt-4 rounded-pill" value="Войти"/>
                       </form>
                    </div>
                </div>
                <div class="modal-footer pt-0 mt-0 border-0 justify-content-center text-center">
                    <p class="fs-6 text-uppercase pt-1 mb-4">Аккаунта ещё нет? <a class="text-decoration-none link-warning" data-bs-target="#profileModal" data-bs-toggle="modal" data-bs-dismiss="modal" role="button">Зарегистрироваться</a></p>
                </div>
            </div>
        </div>
    </div>
    <section class="row p-0 m-0 mb-5 intro">
        <div class="d-none d-md-flex justify-content-between w-100 m-0 px-md-4 align-items-center">
            <img class="info__arrows left__arrow" src="assets/icons/left_arrow.svg" alt="Стрелочка влево">
            <img class="info__arrows right__arrow" src="assets/icons/right_arrow.svg" alt="Стрелочка вправо">
        </div>
    </section>
    <section class="row mx-3 mx-md-4 mx-xl-5 mb-3 mb-md-5">
        <h1 class="mb-4 mb-md-5 fw-bold">Почему выбирают нас</h1>
        <div class="d-flex col-12 col-md-4 mb-3 mb-md-4">
            <img class="why__img" src="assets/icons/why_square.svg" alt="Значок линейки">
            <p class="ps-3">500 кв. м. уникального фитнес пространства</p>
        </div>
        <div class="d-flex col-12 col-md-4 mb-3 mb-md-4">
            <img class="why__img" src="assets/icons/why_handshake.svg" alt="Значок рукопожатия">
            <p class="ps-3">Тренировки с персональным тренером</p>
        </div>
        <div class="d-flex col-12 col-md-4 mb-3 mb-md-4">
            <img class="why__img" src="assets/icons/why_biceps.svg" alt="Значок руки качка">
            <p class="ps-3">Больше 10 направлений групповых тренировок</p>
        </div>
    </section>
    <section class="row mx-3 mx-md-4 mx-xl-5 mb-md-5">
        <h1 class="mb-4 mb-md-5 fw-bold">Выберите себе тренера сами</h1>
        <div class="">

        </div>
        <div class="">

        </div>
    </section>
    <section class="row mx-3 mx-md-4 mx-xl-5 mb-md-5">
        <h1 class="mb-4 mb-md-5 fw-bold">Наше пространство</h1>
    </section>
    <section class="row mx-3 mx-md-4 mx-xl-5 mb-md-5">
        <h1 class="mb-4 mb-md-5 fw-bold">Запишитесь на бесплатную пробную тренировку</h1>
    </section>
    <footer class="bg-black footer">
        <div class="d-flex justify-content-evenly pt-5 fw-light">
            <div class="info_col">
                <h3 class="mb-3 fw-light">Соц.сети</h3>
                <a class="d-flex align-items-center mb-2 text-decoration-none link-light" href="#">
                    <img class="nav__profile" src="assets/icons/Insta.svg" alt="Значок Инстаграма">
                    <p class="m-0 ps-3">Instagram</p>
                </a>
                <a class="d-flex align-items-center mb-2 text-decoration-none link-light" href="#">
                    <img class="nav__profile" src="assets/icons/VK.svg" alt="Значок Вконтакте">
                    <p class="m-0 ps-3">Вконтакте</p>
                </a>
                <a class="d-flex align-items-center mb-2 text-decoration-none link-light" href="#">
                    <img class="nav__profile" src="assets/icons/Telegram.svg" alt="Значок Телеграм">
                    <p class="m-0 ps-3">Telegram</p>
                </a>
            </div>
            <div class="info_col">
                <h3 class="mb-4 fw-light">Контакты</h3>
                <div class="d-flex align-items-center mb-4">
                    <a class="m-0 text-decoration-none link-light" href="#">silushka.fit@gmail.com</a>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <a class="m-0 text-decoration-none link-light" href="#">+79780400677</a>
                </div>
            </div>
            <div class="info_col">
                <h3 class="mb-4 fw-light">График работы</h3>
                <div class="d-flex align-items-center mb-4">
                    <p class="m-0">ПН-ПТ 7:00-22:00</p>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <p class="m-0">СБ 8:00-22:00</p>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <p class="m-0">ВС 10:00-17:00</p>
                </div>
            </div>
            <div class="info_col">
                <div class="d-flex align-items-center mt-2 mb-4">
                    <a class="m-0 text-decoration-none link-light" href="#">Политика конфиденциальности</a>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <a class="m-0 text-decoration-none link-light" href="#">Пользовательское соглашение</a>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <a class="m-0 text-decoration-none link-light" href="#">Правила посещения клуба</a>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <a class="m-0 text-decoration-none link-light" href="#">Острякова, 110, Севастополь</a>
                </div>
            </div>
        </div>
    </footer>
</main>
</body>
</html>
