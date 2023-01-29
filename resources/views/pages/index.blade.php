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
        <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide card">
                <img src="/assets/trainers/2.jpg" />
              </div>
              <div class="swiper-slide card">
                <img src="/assets/trainers/1.jpg" />
              </div>
              <div class="swiper-slide card">
                <img src="/assets/trainers/3.jpg" />
              </div>
            </div>
            <button class="swiper-button-next"></button>
            <button class="swiper-button-prev"></button>
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
@endsection