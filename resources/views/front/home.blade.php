@extends('front.layout.app')

@section('main_content')
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
                    <h2>Качественные комнаты для гостей</h2>
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



@endsection
