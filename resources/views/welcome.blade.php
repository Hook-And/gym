<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>
    <title>Ну, например, СИЛУШКА.</title>
</head>
<body class="bg-dark">
<header class="sticky-top shadow" style="z-index: 1020;">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark px-3 px-md-5">
        <a href="#" class="navbar-brand fw-bold fs-2 lh-sm text-danger">СИЛУШКА</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="navbar-nav me-0 me-md-4 my-auto text-uppercase text-center text-md-start lh-base">
                <li class="nav-item ms-0 ms-md-4 mb-2 mb-md-0">
                    <a class="text-decoration-none link-light" href="#">Главная</a>
                </li>
                <li class="nav-item ms-0 ms-md-4 mb-2 mb-md-0">
                    <a class="text-decoration-none link-light" href="#">Стоимость</a>
                </li>
                <li class="nav-item ms-0 ms-md-4 mb-2 mb-md-0">
                    <a class="text-decoration-none link-light" href="#">Расписание</a>
                </li>
            </ul>
            <button class='btn btn-link p-0' data-bs-toggle="modal" data-bs-target="#profileModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
            </button>
        </div>
    </nav>
</header>
<main style="z-index: 1000;">
    <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h3 class="modal-title text-uppercase" id="profileModalLabel">Регистрация</h3>
                </div>
                <div class="modal-body">
                    Просто текст
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary">Сохранить изменения</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-0 m-0 intro">
        <div class="d-none d-md-flex justify-content-md-end w-100 px-5 m-0 mb-md-3 align-items-end">
            <img class="info__arrows left__arrow" src="assets/icons/left_arrow.svg" alt="Стрелочка влево">
            <img class="info__arrows right__arrow" src="assets/icons/right_arrow.svg" alt="Стрелочка вправо">
        </div>
    </div>
    <div class="row">

    </div>
    <div class="row">

    </div>
</main>
</body>
</html>
