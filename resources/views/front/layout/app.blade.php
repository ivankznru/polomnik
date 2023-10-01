<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <title>Веб сайт отеля</title>

    <link rel="icon" type="image/png" href="{{ asset('uploads/favicon.png') }}">

    <!-- All CSS -->
    <link rel="stylesheet" href="{{ asset('dist-front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist-front/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('dist-front/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist-front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('dist-front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist-front/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist-front/css/select2-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist-front/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist-front/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('dist-front/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist-front/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('dist-front/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('dist-front/css/iziToast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist-front/css/style.css') }}">

    <!-- All Javascripts -->
    <script src="{{ asset('dist-front/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('dist-front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist-front/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('dist-front/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('dist-front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dist-front/js/wow.min.js') }}"></script>
    <script src="{{ asset('dist-front/js/select2.full.js') }}"></script>
    <script src="{{ asset('dist-front/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('dist-front/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('dist-front/js/acmeticker.js') }}"></script>
    <script src="{{ asset('dist-front/js/moment.min.js') }}"></script>
    <script src="{{ asset('dist-front/js/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('dist-front/js/sticky_sidebar.js') }}"></script>
    <script src="{{ asset('dist-front/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('dist-front/js/iziToast.min.js') }}"></script>


    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;500&display=swap" rel="stylesheet">

    <!-- Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-84213520-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-84213520-6');
    </script> -->

</head>
<body>

<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 left-side">
                <ul>
                    <li class="phone-text">+7 919-222-3333</li>
                    <li class="email-text">hotel@mail.ru</li>
                </ul>
            </div>
            <div class="col-md-6 right-side">
                <ul class="right">
                    <li class="menu"><a href="cart.html">Корзина</a></li>
                    <li class="menu"><a href="checkout.html">Расчет</a></li>
                    <li class="menu"><a href="signup.html">Зарегистрироваться</a></li>
                    <li class="menu"><a href="login.html">Логин</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="navbar-area" id="stickymenu">

    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="index.html" class="logo">
            <img src="uploads/logo.png" alt="">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="uploads/logo.png" alt="">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link">Главная страница</a>
                        </li>
                        <li class="nav-item">
                            <a href="room-detail.html" class="nav-link">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void;" class="nav-link dropdown-toggle">Номера и люкс</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="room-detail.html" class="nav-link">Стандартная кровать для двоих</a>
                                </li>
                                <li class="nav-item">
                                    <a href="room-detail.html" class="nav-link">Кровать Делюкс для пары</a>
                                </li>
                                <li class="nav-item">
                                    <a href="room-detail.html" class="nav-link">Стандартная двуспальная кровать</a>
                                </li>
                                <li class="nav-item">
                                    <a href="room-detail.html" class="nav-link">Двуспальная кровать Делюкс</a>
                                </li>
                                <li class="nav-item">
                                    <a href="room-detail.html" class="nav-link">Люкс «Премиум»</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void;" class="nav-link dropdown-toggle">Галерея</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="photo-gallery.html" class="nav-link">Фотогалерея</a>
                                </li>
                                <li class="nav-item">
                                    <a href="video-gallery.html" class="nav-link">Видеогалерея</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="blog.html" class="nav-link">Блог</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">Контакты</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>




<div class="slider">
    <div class="slide-carousel owl-carousel">
        <div class="item" style="background-image:url(public/uploads/slide1.jpg);">
            <div class="bg"></div>
            <div class="text">
                <h2>Лучший отель в городе</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt libero voluptate, veritatis esse dolorem soluta.
                </p>
                <div class="button">
                    <a href="">Подробнее</a>
                </div>
            </div>
        </div>
        <div class="item" style="background-image:url(public/uploads/slide1.jpg);">
            <div class="bg"></div>
            <div class="text">
                <h2>Качественные номера для гостей</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt libero voluptate, veritatis esse dolorem soluta.
                </p>
                <div class="button">
                    <a href="">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="search-section">
    <div class="container">
        <form action="cart.html" method="post">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <select name="" class="form-select">
                                <option value="">Выберите комнату</option>
                                <option value="">Стандартная спальня для пары</option>
                                <option value="">Двухместный номер Делюкс для пары</option>
                                <option value="">Стандартный четырехместный номер</option>
                                <option value="">Четырехместный номер Делюкс</option>
                                <option value="">VIP-номер</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input type="text" name="checkin_checkout" class="form-control daterange1" placeholder="Регистрация и оформление заказа">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <input type="number" name="" class="form-control" min="1" max="30" placeholder="Взрослые">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <input type="number" name="" class="form-control" min="1" max="30" placeholder="Дети">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <button type="submit" class="btn btn-primary">Заказать</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>



<div class="home-feature">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="inner">
                    <div class="icon"><i class="fa fa-clock-o"></i></div>
                    <div class="text">
                        <h2>Круглосуточное обслуживание номеров</h2>
                        <p>
                            Если вы найдете онлайн-тариф по более низкой цене, мы подберем его и предоставим вам дополнительную скидку в размере 25% на ваше пребывание.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="icon"><i class="fa fa-wifi"></i></div>
                    <div class="text">
                        <h2>Бесплатный Wifi</h2>
                        <p>
                            Если вы найдете онлайн-тариф по более низкой цене, мы подберем его и предоставим вам дополнительную скидку в размере 25% на ваше пребывание.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="icon"><i class="fa fa-superpowers"></i></div>
                    <div class="text">
                        <h2>Наслаждайтесь бесплатными ночами</h2>
                        <p>
                            Если вы найдете онлайн-тариф по более низкой цене, мы подберем его и предоставим вам дополнительную скидку в размере 25% на ваше пребывание.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="icon"><i class="fa fa-money"></i></div>
                    <div class="text">
                        <h2>Экономьте до 40%</h2>
                        <p>
                            Участники получают доступ к эксклюзивным скидкам на Radissonblu.ru . Еще не член клуба? Поторопись!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="icon"><i class="fa fa-coffee"></i></div>
                    <div class="text">
                        <h2>Бесплатный завтрак</h2>
                        <p>
                            Если вы найдете онлайн-тариф по более низкой цене, мы подберем его и предоставим вам дополнительную скидку в размере 25% на ваше пребывание.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="icon"><i class="fa fa-crosshairs"></i></div>
                    <div class="text">
                        <h2>Плавательный бассейн</h2>
                        <p>
                            Если вы найдете онлайн-тариф по более низкой цене, мы подберем его и предоставим вам дополнительную скидку в размере 25% на ваше пребывание.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="icon"><i class="fa fa-cubes"></i></div>
                    <div class="text">
                        <h2>Тренажерный зал и фитнес</h2>
                        <p>
                            Если вы найдете онлайн-тариф по более низкой цене, мы подберем его и предоставим вам дополнительную скидку в размере 25% на ваше пребывание.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="icon"><i class="fa fa-cutlery"></i></div>
                    <div class="text">
                        <h2>Ресторан высшего класса</h2>
                        <p>
                            Участники получают доступ к эксклюзивным скидкам на Radissonblu.ru . Еще не член клуба? Поторопись!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="home-rooms">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-header">Номера и люксы</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="inner">
                    <div class="photo">
                        <img src="uploads/1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="">Стандартная супружеская кровать</a></h2>
                        <div class="price">
                            ₽100/Ночь
                        </div>
                        <div class="button">
                            <a href="room-detail.html" class="btn btn-primary">Смотрите подробности</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="photo">
                        <img src="uploads/2.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="">Стандартная супружеская кровать</a></h2>
                        <div class="price">
                            ₽100/Ночь
                        </div>
                        <div class="button">
                            <a href="room-detail.html" class="btn btn-primary">Смотрите подробности</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="photo">
                        <img src="uploads/3.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="">Стандартная супружеская кровать</a></h2>
                        <div class="price">
                            ₽100/Ночь
                        </div>
                        <div class="button">
                            <a href="room-detail.html" class="btn btn-primary">Смотрите подробности</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="photo">
                        <img src="uploads/4.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="">Стандартная супружеская кровать</a></h2>
                        <div class="price">
                            ₽100/Ночь
                        </div>
                        <div class="button">
                            <a href="room-detail.html" class="btn btn-primary">Смотрите подробности</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="photo">
                        <img src="uploads/5.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="">Стандартная супружеская кровать</a></h2>
                        <div class="price">
                            ₽100/Ночь
                        </div>
                        <div class="button">
                            <a href="room-detail.html" class="btn btn-primary">Смотрите подробности</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="photo">
                        <img src="uploads/6.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="">Стандартная супружеская кровать</a></h2>
                        <div class="price">
                            ₽100/Ночь
                        </div>
                        <div class="button">
                            <a href="room-detail.html" class="btn btn-primary">Смотрите подробности</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="photo">
                        <img src="uploads/7.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="">Стандартная супружеская кровать</a></h2>
                        <div class="price">
                            ₽100/Ночь
                        </div>
                        <div class="button">
                            <a href="room-detail.html" class="btn btn-primary">Смотрите подробности</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="photo">
                        <img src="uploads/1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="">Стандартная супружеская кровать</a></h2>
                        <div class="price">
                            ₽100/Ночь
                        </div>
                        <div class="button">
                            <a href="room-detail.html" class="btn btn-primary">Смотрите подробности</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="big-button">
                    <a href="" class="btn btn-primary">Посмотреть все комнаты</a>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="testimonial" style="background-image: url(public/uploads/slide2.jpg)">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-header">Наши довольные клиенты</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-carousel owl-carousel">
                    <div class="item">
                        <div class="photo">
                            <img src="uploads/t1.jpg" alt="">
                        </div>
                        <div class="text">
                            <h4>Надежда Круглова</h4>
                            <p>Москва </p>
                        </div>
                        <div class="description">
                            <p>
                                Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens. Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo">
                            <img src="uploads/t2.jpg" alt="">
                        </div>
                        <div class="text">
                            <h4>Игорь Петров</h4>
                            <p>Петербург</p>
                        </div>
                        <div class="description">
                            <p>
                                Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens. Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="blog-item">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-header">Последние сообщения</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="inner">
                    <div class="photo">
                        <img src="uploads/1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="post.html">Это пример заголовка записи в блоге</a></h2>
                        <div class="short-des">
                            <p>
                                Если вы хотите получить какой-то хороший контент от жителей вашей страны, тогда просто внесите свой вклад в основное сообщество вашего народа, и я уверен, что вы получите от этого пользу.
                            </p>
                        </div>
                        <div class="button">
                            <a href="post.html" class="btn btn-primary">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="inner">
                    <div class="photo">
                        <img src="uploads/2.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="post.html">Это пример заголовка записи в блоге</a></h2>
                        <div class="short-des">
                            <p>
                                Если вы хотите получить какой-то хороший контент от жителей вашей страны, тогда просто внесите свой вклад в основное сообщество вашего народа, и я уверен, что вы получите от этого пользу.
                            </p>
                        </div>
                        <div class="button">
                            <a href="post.html" class="btn btn-primary">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="inner">
                    <div class="photo">
                        <img src="uploads/3.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="post.html">Это пример заголовка записи в блоге</a></h2>
                        <div class="short-des">
                            <p>
                                Если вы хотите получить какой-то хороший контент от жителей вашей страны, тогда просто внесите свой вклад в основное сообщество вашего народа, и я уверен, что вы получите от этого пользу.
                            </p>
                        </div>
                        <div class="button">
                            <a href="post.html" class="btn btn-primary">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="item">
                    <h2 class="heading">Ссылки сайта</h2>
                    <ul class="useful-links">
                        <li><a href="rooms.html">Номера и люксы</a></li>
                        <li><a href="photo-gallery.html">Фотогалерея</a></li>
                        <li><a href="blog.html">Блог</a></li>
                        <li><a href="contact.html">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item">
                    <h2 class="heading">Полезные ссылки</h2>
                    <ul class="useful-links">
                        <li><a href="index.html">Главная страница</a></li>
                        <li><a href="terms.html">Условия и положения</a></li>
                        <li><a href="privacy.html">Политика конфиденциальности</a></li>
                        <li><a href="disclaimer.html">Отказ от ответственности</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-md-3">
                <div class="item">
                    <h2 class="heading">Контакты</h2>
                    <div class="list-item">
                        <div class="left">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="right">
                            Россия,<br>
                            Сочи, 12937
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="left">
                            <i class="fa fa-volume-control-phone"></i>
                        </div>
                        <div class="right">
                            hotel@mail.ru
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="left">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="right">
                            122-222-1212
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="item">
                    <h2 class="heading">Новостная рассылка</h2>
                    <p>
                        Чтобы быть в курсе последних новостей и других замечательных материалов, подпишитесь на нас здесь:
                    </p>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Subscribe Now">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="copyright">
    Copyright 2023,  Все права защищены.
</div>

<div class="scroll-top">
    <i class="fa fa-angle-up"></i>
</div>

<script src="{{ asset('dist-front/js/custom.js') }}"></script>


</body>
</html>
