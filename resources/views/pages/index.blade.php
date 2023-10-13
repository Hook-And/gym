@extends('layouts.main-layout')

@section('title', 'Силушка — Фитнес-клуб в Севастополе')

@section('content')
<main>
    <div class="modal" id="profileModal" aria-labelledby="profileModalLabel" aria-hidden="true" tabindex="-1">
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
    <div class="modal" id="profileModal_log" aria-labelledby="profileModalLabel_log" aria-hidden="true" tabindex="-1">
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
        <div class="swiper mb-1">
            <div class="swiper-wrapper">
              <div class="swiper-slide card">
                <img src="/assets/trainers/2.jpg" />
                <p class="mt-3 fs-4">Рустем</p>
              </div>
              <div class="swiper-slide card">
                <img src="/assets/trainers/1.jpg" />
                <p class="mt-3 fs-4">Валерия</p>
              </div>
              <div class="swiper-slide card">
                <img src="/assets/trainers/3.jpg" />
                <p class="mt-3 fs-4">Елена</p>
              </div>
            </div>
            <button class="swiper-button-next"></button>
            <button class="swiper-button-prev"></button>
          </div>
        </div>
        <p class="trainers-info mb-4">8 лет в профессиональном спорте<br>
            Выигрывал первенство Крыма и Севастополя по боксу<br>
            Двукратный чемпион ЮФО Крыма и Севастополя по армреслингу</p>
        <a style="width: 15%; margin: 0 auto 0 auto;" class='btn btn-warning rounded-pill text-decoration-none py-2 px-4 fw-bold lh-base fs-6' href = '#inviteForm'">Записаться</a>
    </section>
    <section class="row mx-3 mx-md-4 mx-xl-5 mb-md-5">
        <h1 class="mb-4 mb-md-5 fw-bold">Наше пространство</h1>
    </section>
    <section class="row mx-3 mx-md-4 mx-xl-5 mb-md-5" id="inviteForm">
        <h1 class="mb-4 mb-md-5 fw-bold">Запишитесь на бесплатную пробную тренировку</h1>
        <div class="d-flex align-items-center">
            <form class="d-flex form_main-img" action="#" method="">
                <span>
                    <input class="form-control fs-6 mt-5 mb-5 py-2 form-input-free bg-transparent px-0 text-light" type="text" placeholder="Введите имя">
                    <input class="form-control fs-6 py-2 form-input-free bg-transparent px-0 text-light" type="tel" placeholder="Введите номер телефона">
                </span>
                <span>
                    <input class="form-control fs-6 mt-5 mb-5 py-2 form-input-free bg-transparent px-0 text-light" type="email" placeholder="Введите E-mail">
                    <!--<div class="d-flex fs-6 py-2 form-input-free bg-transparent px-0 cursor-point">
                        <label id="trainers_label" class="cursor-point" for="trainers">Выберите тренера:</label>
                        <select class="form-select fs-6 mb-0 py-0 bg-transparent px-0 cursor-point" name="trainers" id="trainers">
                            <option value="rustem">Рустем</option>
                            <option value="elena">Елена</option>
                            <option value="valeria">Валерия</option>
                        </select>
                    </div>-->
                </span>
                <span class="form-check break">
                    <input class="form-check-input cursor-point" type="checkbox" name="personal-data" id="personal-data">
                    <label class="form-check-label cursor-point" for="personal-data">Согласен(-а) на обработку персональных данных</label>
                </span>
                <span class="form-check break">
                    <input class="form-check-input cursor-point" type="checkbox" name="politics" id="politics">
                    <label class="form-check-label cursor-point" for="politics">Согласен(-а) с <a class="link-light" href="#">Политикой конфиденциальности</a></label>
                </span>
                <span class="break">
                    <input type="submit" value="Записаться" class="btn btn-warning btn-lg mt-4 mb-5 rounded-pill text-decoration-none py-2 px-4 fw-bold lh-base fs-6">
                </span>
            </form>
        </div>
    </section>
@endsection