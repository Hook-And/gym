<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="image/x-icon" rel="shortcut icon" href="/assets/favicon/favicon.ico">
    <link sizes="32x32" rel="apple-touch-icon" href="/assets/favicon/favicon-32x32.png">
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body class="bg-dark text-light">
    <header class="mx-lg-0 sticky-md-top shadow" style="z-index: 1020;">
        <nav class="navbar navbar-expand-md navbar-dark d-flex justify-content-between justify-content-md-start bg-dark px-3 px-md-5">
            <a class="d-md-none text-decoration-none link-light fw-bold fst-italic fs-7 my-auto" href="#"><img class="me-2 nav__icon" src="/assets/icons/mapmark.svg" alt="Значок метки на карте">Острякова</a>
            <a href="#" class="navbar-brand fw-bold fst-italic fs-1 lh-sm text-warning">Фитнес-клуб</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                <ul class="navbar-nav me-0 me-md-4 text-center text-md-start fw-bold lh-base">
                    <li class="nav-item ms-0 ms-md-4 mb-2 my-md-auto">
                        <a class="nav-item ms-0 ms-md-4 mb-2 my-md-auto text-decoration-none link-light" href="#">Главная</a>
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
                        <a class='btn btn-warning btn-lg rounded-pill text-decoration-none py-2 px-4 fw-bold lh-base fs-6' href="#inviteForm">Записаться</a>
                    </li>
                </ul>
                <a class='text-decoration-none p-0' data-bs-toggle="modal" href="#profileModal_log" role="button"><img class="nav__profile" src="/assets/icons/user_profile.svg" alt="Sign In"></a>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer class="bg-black footer">
        <div class="d-none d-md-flex justify-content-between justify-content-md-around justify-content-lg-evenly pt-3 pt-md-4 pt-lg-5 fw-light">
            <div class="info_col">
                <h3 class="mb-3 fw-light">Соц.сети</h3>
                <a class="d-flex align-items-center mb-2 text-decoration-none link-light" href="#">
                    <img class="nav__profile" src="/assets/icons/Insta.svg" alt="Значок Инстаграма">
                    <p class="m-0 ps-3">Instagram</p>
                </a>
                <a class="d-flex align-items-center mb-2 text-decoration-none link-light" href="#">
                    <img class="nav__profile" src="/assets/icons/VK.svg" alt="Значок Вконтакте">
                    <p class="m-0 ps-3">Вконтакте</p>
                </a>
                <a class="d-flex align-items-center mb-2 text-decoration-none link-light" href="#">
                    <img class="nav__profile" src="/assets/icons/Telegram.svg" alt="Значок Телеграм">
                    <p class="m-0 ps-3">Telegram</p>
                </a>
            </div>
            <div class="info_col">
                <h3 class="mb-4 fw-light">Контакты</h3>
                <div class="d-flex align-items-center mb-4">
                    <a class="m-0 text-decoration-none link-light" href="#">fitness-club@gmail.com</a>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <a class="m-0 text-decoration-none link-light" href="#">+7 (900) 909-99-99</a>
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
                    <a class="m-0 text-decoration-none link-light" href="#">Адрес</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>