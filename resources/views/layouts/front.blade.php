<!-- https://www.figma.com/file/4Djf8xp70ZXQPhHetDcJ9k/D-Tora-%D0%B1%2F%D1%83-%D0%BD%D0%BE%D1%83%D1%82%D0%B1%D1%83%D0%BA%D0%B8-(Copy)?type=design&t=yBuJ2GPPtHQb85tI-0 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D-Tora</title>

    <link rel="icon" href="{{ asset('/favicon.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('assets/lib/owl/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/adaptive.css') }}">
</head>
<body>
<div class="lines"></div>

<header class="header" id="header">
    <div class="container">
        <div class="header__inner">
            <a href="/" class="header__logo">
                <img src="{{ asset('/assets/image/logo.svg') }}">
            </a>
            <div class="header__slogan">магазин<br> ноутбуков</div>
            <div class="header__separator"></div>
            <div class="header__location">
                <img src="./assets/image/location.svg">
                <span>г. Новосибирск,<br> ул. Челюскинцев 44/2, офис 209</span>
            </div>
            <div class="header__social">
                <a><img src="{{ asset('/assets/image/whatsapp.svg') }}"></a>
                <a><img src="{{ asset('/assets/image/telegram.svg') }}"></a>
                <a><img src="{{ asset('/assets/image/vk.svg') }}"></a>
            </div>
            <div class="header__wrapper">
                <div class="header__schedule">
                    <img src="{{ asset('/assets/image/schedule.svg') }}">
                    <span>Пн-Вс с 10:00-20:00</span>
                </div>
                <a class="header__phone" href="tel: +7 (923) 140-99-52">+7 (923) 140-99-52</a>
                <button class="header__callback js-open-modal" data-form-id="modal-form-callback">Обратный звонок</button>
            </div>
        </div>
        <nav class="header__menu">
            <a>НОУТБУКИ</a>
            <a>КОМПЬЮТЕРЫ</a>
            <a>ДОСТАВКА И ОПЛАТА</a>
            <a>СКУПКА</a>
            <a>КОНТАКТЫ</a>
        </nav>
    </div>
</header>

<header id="fixed-header" class="fixed-header">
    <div class="container">
        <div class="fixed-header__inner">
            <a href="/" class="fixed-header__logo">
                <img src="./assets/image/logo.svg">
            </a>
            <div class="fixed-header__slogan">магазин<br> ноутбуков</div>
            <div class="fixed-header__separator"></div>
            <div class="fixed-header__location">
                <img src="./assets/image/location.svg">
                <span>г. Новосибирск,<br> ул. Челюскинцев 44/2, офис 209</span>
            </div>
            <div class="fixed-header__social">
                <a><img src="./assets/image/whatsapp.svg"></a>
                <a><img src="./assets/image/telegram.svg"></a>
                <a><img src="./assets/image/vk.svg"></a>
            </div>
            <div class="fixed-header__wrapper">
                <div class="fixed-header__schedule">
                    <img src="./assets/image/schedule.svg">
                    <span>Пн-Вс с 10:00-20:00</span>
                </div>
                <a class="fixed-header__phone" href="tel: +7 (923) 140-99-52">+7 (923) 140-99-52</a>
                <button class="fixed-header__callback js-open-modal" data-form-id="modal-form-callback">Обратный звонок</button>
            </div>
            <a class="fixed-header__mobile-phone" href="tel: +7 (923) 140-99-52">
                <img src="./assets/image/phone-header.svg">
            </a>
            <div class="fixed-header__separator"></div>
            <button class="fixed-header__burger js-open-menu">
                <img src="./assets/image/burger.svg">
                <span>меню</span>
            </button>
        </div>
    </div>
</header>

<header class="header-cap"></header>

<section class="banner">
    <div class="container">
        <h1 class="banner__title font-sony">Магазин <span> ноутбуков</span></h1>
        <h1 class="banner__title banner__title_mobile font-sony">Магазин <span>ноутбуков</span></h1>

        <div class="banner__advantages">
            <div class="banner__advantage">
                <img src="./assets/image/advantages1.svg">
                <span><b>Гарантия</b></span>
            </div>
            <div class="banner__advantage">
                <img src="./assets/image/advantages2.svg">
                <span><b>Наличный</b> и <b>безналичный</b> расчет</span>
            </div>
            <div class="banner__advantage">
                <img src="./assets/image/advantages3.svg">
                <span><b>Трейд-ин</b></span>
            </div>
            <div class="banner__advantage">
                <img src="./assets/image/advantages4.svg">
                <span>Работа с <b>юрлицами</b></span>
            </div>
        </div>

        <img class="banner__image" src="./assets/image/banner-full.png">

        <form class="form banner__form" data-id="modal-form-callback">
            <div class="form__title"><span>Получите</span> бесплатную консультацию!</div>
            <fieldset>
                <label>Ваш телефон*</label>
                <input type="tel" placeholder="+7 (___) ___ - __ - __">
                <div class="error-text">* Поле не заполнено</div>
            </fieldset>
            <button class="btn">Заказать звонок</button>
        </form>
    </div>
</section>

<section class="products">
    <div class="products__container">
        <div class="title">Ноутбуки</div>
        <div class="products__inner">
            <div class="product" data-product-id="001">
                <div class="product__name">Ноутбук Huawei MateBook D 16 RLEF-X</div>
                <div class="product__article">Артикул: 00 - 00024465</div>
                <div class="product__row">
                    <div class="product__gallery">
                        <div class="product__detail js-product-detail">
                            <img src="./assets/image/product-detail1.png">
                        </div>
                        <div class="product__thumb">
                            <div class="product__thumb__nav product__thumb__nav_001"></div>
                            <div class="product__thumb__slider owl-carousel owl-theme js-product-thumb">
                                <img data-detail-img="/assets/image/product-detail1.png" src="./assets/image/laptop-thumb1.png">
                                <img data-detail-img="/assets/image/product-detail2.png" src="./assets/image/laptop-thumb2.png">
                                <img data-detail-img="/assets/image/product-detail3.png" src="./assets/image/laptop-thumb3.png">
                                <img data-detail-img="/assets/image/product-detail4.png" src="./assets/image/laptop-thumb4.png">
                            </div>
                        </div>
                    </div>
                    <div class="product__left__mobile">
                        <div class="product__gallery__mobile owl-carousel owl-theme">
                            <img src="./assets/image/product-detail1.png">
                            <img src="./assets/image/product-detail2.png">
                            <img src="./assets/image/product-detail3.png">
                            <img src="./assets/image/product-detail4.png">
                        </div>
                        <div class="product__tooltip">
                            <div class="product__tooltip__item">
                                <img src="./assets/image/product-icon1.svg">
                                <div class="product__tooltip__block">
                                    <div class="product__tooltip__title">Оплата</div>
                                    <div class="product__tooltip__text">Оплачивайте покупки удобным способом. В интернет-магазине доступно 3 варианта оплаты.</div>
                                </div>
                            </div>
                            <div class="product__tooltip__item">
                                <img src="./assets/image/product-icon2.svg">
                                <div class="product__tooltip__block">
                                    <div class="product__tooltip__title">Доставка</div>
                                    <div class="product__tooltip__text">Экономьте время на получении заказа. В интернет-магазине доступно 4 варианта доставки.</div>
                                </div>
                            </div>
                            <div class="product__tooltip__item">
                                <img src="./assets/image/product-icon3.svg">
                                <div class="product__tooltip__block">
                                    <div class="product__tooltip__title">Самовывоз</div>
                                    <div class="product__tooltip__text">Заберите заказ сами из нашего магазина.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__info">
                        <span class="product__availability">В наличии</span>
                        <div class="product__chars">15.6", AMD Ryzen 5 5600H, ядра: 6 х 3.3 ГГц, GeForce RTX 3050 для ноутбуков 4 ГБ, SSD 512 ГБ, RAM 16 ГБ, без ОС, HUAWEI</div>
                        <a class="product__link">Все характеристики <img src="./assets/image/arrow-link.svg"></a>
                        <div class="product__bottom">
                            <div class="product__price">9 900 <span>₽</span></div>
                            <button class="btn product__btn js-open-modal" data-form-id="modal-form-product" data-product-name="Ноутбук Huawei MateBook D 16 RLEF-X">заказать</button>
                        </div>
                        <div class="product__loan">Вы можете приобрести товар в кредит</div>
                    </div>
                    <div class="product__tooltip">
                        <div class="product__tooltip__item">
                            <img src="./assets/image/product-icon1.svg">
                            <div class="product__tooltip__block">
                                <div class="product__tooltip__title">Оплата</div>
                                <div class="product__tooltip__text">Оплачивайте покупки удобным способом. В интернет-магазине доступно 3 варианта оплаты.</div>
                            </div>
                        </div>
                        <div class="product__tooltip__item">
                            <img src="./assets/image/product-icon2.svg">
                            <div class="product__tooltip__block">
                                <div class="product__tooltip__title">Доставка</div>
                                <div class="product__tooltip__text">Экономьте время на получении заказа. В интернет-магазине доступно 4 варианта доставки.</div>
                            </div>
                        </div>
                        <div class="product__tooltip__item">
                            <img src="./assets/image/product-icon3.svg">
                            <div class="product__tooltip__block">
                                <div class="product__tooltip__title">Самовывоз</div>
                                <div class="product__tooltip__text">Заберите заказ сами из нашего магазина.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product" data-product-id="002">
                <div class="product__name">Ноутбук Huawei MateBook D 16 RLEF-X</div>
                <div class="product__article">Артикул: 00 - 00024465</div>
                <div class="product__row">
                    <div class="product__gallery">
                        <div class="product__detail js-product-detail">
                            <img src="./assets/image/product-detail1.png">
                        </div>
                        <div class="product__thumb">
                            <div class="product__thumb__nav product__thumb__nav_002"></div>
                            <div class="product__thumb__slider owl-carousel owl-theme js-product-thumb">
                                <img data-detail-img="/assets/image/product-detail1.png" src="./assets/image/laptop-thumb1.png">
                                <img data-detail-img="/assets/image/product-detail2.png" src="./assets/image/laptop-thumb2.png">
                                <img data-detail-img="/assets/image/product-detail3.png" src="./assets/image/laptop-thumb3.png">
                                <img data-detail-img="/assets/image/product-detail4.png" src="./assets/image/laptop-thumb4.png">
                            </div>
                        </div>
                    </div>
                    <div class="product__left__mobile">
                        <div class="product__gallery__mobile owl-carousel owl-theme">
                            <img src="./assets/image/product-detail1.png">
                            <img src="./assets/image/product-detail2.png">
                            <img src="./assets/image/product-detail3.png">
                            <img src="./assets/image/product-detail4.png">
                        </div>
                        <div class="product__tooltip">
                            <div class="product__tooltip__item">
                                <img src="./assets/image/product-icon1.svg">
                                <div class="product__tooltip__block">
                                    <div class="product__tooltip__title">Оплата</div>
                                    <div class="product__tooltip__text">Оплачивайте покупки удобным способом. В интернет-магазине доступно 3 варианта оплаты.</div>
                                </div>
                            </div>
                            <div class="product__tooltip__item">
                                <img src="./assets/image/product-icon2.svg">
                                <div class="product__tooltip__block">
                                    <div class="product__tooltip__title">Доставка</div>
                                    <div class="product__tooltip__text">Экономьте время на получении заказа. В интернет-магазине доступно 4 варианта доставки.</div>
                                </div>
                            </div>
                            <div class="product__tooltip__item">
                                <img src="./assets/image/product-icon3.svg">
                                <div class="product__tooltip__block">
                                    <div class="product__tooltip__title">Самовывоз</div>
                                    <div class="product__tooltip__text">Заберите заказ сами из нашего магазина.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__info">
                        <span class="product__availability">В наличии</span>
                        <div class="product__chars">15.6", AMD Ryzen 5 5600H, ядра: 6 х 3.3 ГГц, GeForce RTX 3050 для ноутбуков 4 ГБ, SSD 512 ГБ, RAM 16 ГБ, без ОС, HUAWEI</div>
                        <a class="product__link">Все характеристики <img src="./assets/image/arrow-link.svg"></a>
                        <div class="product__bottom">
                            <div class="product__price">9 900 <span>₽</span></div>
                            <button class="btn product__btn js-open-modal" data-form-id="modal-form-product" data-product-name="Ноутбук Huawei MateBook D 16 RLEF-X">заказать </button>
                        </div>
                        <div class="product__loan">Вы можете приобрести товар в кредит</div>
                    </div>
                    <div class="product__tooltip">
                        <div class="product__tooltip__item">
                            <img src="./assets/image/product-icon1.svg">
                            <div class="product__tooltip__block">
                                <div class="product__tooltip__title">Оплата</div>
                                <div class="product__tooltip__text">Оплачивайте покупки удобным способом. В интернет-магазине доступно 3 варианта оплаты.</div>
                            </div>
                        </div>
                        <div class="product__tooltip__item">
                            <img src="./assets/image/product-icon2.svg">
                            <div class="product__tooltip__block">
                                <div class="product__tooltip__title">Доставка</div>
                                <div class="product__tooltip__text">Экономьте время на получении заказа. В интернет-магазине доступно 4 варианта доставки.</div>
                            </div>
                        </div>
                        <div class="product__tooltip__item">
                            <img src="./assets/image/product-icon3.svg">
                            <div class="product__tooltip__block">
                                <div class="product__tooltip__title">Самовывоз</div>
                                <div class="product__tooltip__text">Заберите заказ сами из нашего магазина.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product" data-product-id="003">
                <div class="product__name">Ноутбук Huawei MateBook D 16 RLEF-X</div>
                <div class="product__article">Артикул: 00 - 00024465</div>
                <div class="product__row">
                    <div class="product__gallery">
                        <div class="product__detail js-product-detail">
                            <img src="./assets/image/product-detail1.png">
                        </div>
                        <div class="product__thumb">
                            <div class="product__thumb__nav product__thumb__nav_003"></div>
                            <div class="product__thumb__slider owl-carousel owl-theme js-product-thumb">
                                <img data-detail-img="/assets/image/product-detail1.png" src="./assets/image/laptop-thumb1.png">
                                <img data-detail-img="/assets/image/product-detail2.png" src="./assets/image/laptop-thumb2.png">
                                <img data-detail-img="/assets/image/product-detail3.png" src="./assets/image/laptop-thumb3.png">
                                <img data-detail-img="/assets/image/product-detail4.png" src="./assets/image/laptop-thumb4.png">
                            </div>
                        </div>
                    </div>
                    <div class="product__left__mobile">
                        <div class="product__gallery__mobile owl-carousel owl-theme">
                            <img src="./assets/image/product-detail1.png">
                            <img src="./assets/image/product-detail2.png">
                            <img src="./assets/image/product-detail3.png">
                            <img src="./assets/image/product-detail4.png">
                        </div>
                        <div class="product__tooltip">
                            <div class="product__tooltip__item">
                                <img src="./assets/image/product-icon1.svg">
                                <div class="product__tooltip__block">
                                    <div class="product__tooltip__title">Оплата</div>
                                    <div class="product__tooltip__text">Оплачивайте покупки удобным способом. В интернет-магазине доступно 3 варианта оплаты.</div>
                                </div>
                            </div>
                            <div class="product__tooltip__item">
                                <img src="./assets/image/product-icon2.svg">
                                <div class="product__tooltip__block">
                                    <div class="product__tooltip__title">Доставка</div>
                                    <div class="product__tooltip__text">Экономьте время на получении заказа. В интернет-магазине доступно 4 варианта доставки.</div>
                                </div>
                            </div>
                            <div class="product__tooltip__item">
                                <img src="./assets/image/product-icon3.svg">
                                <div class="product__tooltip__block">
                                    <div class="product__tooltip__title">Самовывоз</div>
                                    <div class="product__tooltip__text">Заберите заказ сами из нашего магазина.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__info">
                        <span class="product__availability">В наличии</span>
                        <div class="product__chars">15.6", AMD Ryzen 5 5600H, ядра: 6 х 3.3 ГГц, GeForce RTX 3050 для ноутбуков 4 ГБ, SSD 512 ГБ, RAM 16 ГБ, без ОС, HUAWEI</div>
                        <a class="product__link">Все характеристики <img src="./assets/image/arrow-link.svg"></a>
                        <div class="product__bottom">
                            <div class="product__price">9 900 <span>₽</span></div>
                            <button class="btn product__btn js-open-modal" data-form-id="modal-form-product" data-product-name="Ноутбук Huawei MateBook D 16 RLEF-X">заказать </button>
                        </div>
                        <div class="product__loan">Вы можете приобрести товар в кредит</div>
                    </div>
                    <div class="product__tooltip">
                        <div class="product__tooltip__item">
                            <img src="./assets/image/product-icon1.svg">
                            <div class="product__tooltip__block">
                                <div class="product__tooltip__title">Оплата</div>
                                <div class="product__tooltip__text">Оплачивайте покупки удобным способом. В интернет-магазине доступно 3 варианта оплаты.</div>
                            </div>
                        </div>
                        <div class="product__tooltip__item">
                            <img src="./assets/image/product-icon2.svg">
                            <div class="product__tooltip__block">
                                <div class="product__tooltip__title">Доставка</div>
                                <div class="product__tooltip__text">Экономьте время на получении заказа. В интернет-магазине доступно 4 варианта доставки.</div>
                            </div>
                        </div>
                        <div class="product__tooltip__item">
                            <img src="./assets/image/product-icon3.svg">
                            <div class="product__tooltip__block">
                                <div class="product__tooltip__title">Самовывоз</div>
                                <div class="product__tooltip__text">Заберите заказ сами из нашего магазина.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product" data-product-id="004">
                <div class="product__name">Ноутбук Huawei MateBook D 16 RLEF-X</div>
                <div class="product__article">Артикул: 00 - 00024465</div>
                <div class="product__row">
                    <div class="product__gallery">
                        <div class="product__detail js-product-detail">
                            <img src="./assets/image/product-detail1.png">
                        </div>
                        <div class="product__thumb">
                            <div class="product__thumb__nav product__thumb__nav_004"></div>
                            <div class="product__thumb__slider owl-carousel owl-theme js-product-thumb">
                                <img data-detail-img="/assets/image/product-detail1.png" src="./assets/image/laptop-thumb1.png">
                                <img data-detail-img="/assets/image/product-detail2.png" src="./assets/image/laptop-thumb2.png">
                                <img data-detail-img="/assets/image/product-detail3.png" src="./assets/image/laptop-thumb3.png">
                                <img data-detail-img="/assets/image/product-detail4.png" src="./assets/image/laptop-thumb4.png">
                            </div>
                        </div>
                    </div>
                    <div class="product__left__mobile">
                        <div class="product__gallery__mobile owl-carousel owl-theme">
                            <img src="./assets/image/product-detail1.png">
                            <img src="./assets/image/product-detail2.png">
                            <img src="./assets/image/product-detail3.png">
                            <img src="./assets/image/product-detail4.png">
                        </div>
                        <div class="product__tooltip">
                            <div class="product__tooltip__item">
                                <img src="./assets/image/product-icon1.svg">
                                <div class="product__tooltip__block">
                                    <div class="product__tooltip__title">Оплата</div>
                                    <div class="product__tooltip__text">Оплачивайте покупки удобным способом. В интернет-магазине доступно 3 варианта оплаты.</div>
                                </div>
                            </div>
                            <div class="product__tooltip__item">
                                <img src="./assets/image/product-icon2.svg">
                                <div class="product__tooltip__block">
                                    <div class="product__tooltip__title">Доставка</div>
                                    <div class="product__tooltip__text">Экономьте время на получении заказа. В интернет-магазине доступно 4 варианта доставки.</div>
                                </div>
                            </div>
                            <div class="product__tooltip__item">
                                <img src="./assets/image/product-icon3.svg">
                                <div class="product__tooltip__block">
                                    <div class="product__tooltip__title">Самовывоз</div>
                                    <div class="product__tooltip__text">Заберите заказ сами из нашего магазина.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__info">
                        <span class="product__availability">В наличии</span>
                        <div class="product__chars">15.6", AMD Ryzen 5 5600H, ядра: 6 х 3.3 ГГц, GeForce RTX 3050 для ноутбуков 4 ГБ, SSD 512 ГБ, RAM 16 ГБ, без ОС, HUAWEI</div>
                        <a class="product__link">Все характеристики <img src="./assets/image/arrow-link.svg"></a>
                        <div class="product__bottom">
                            <div class="product__price">9 900 <span>₽</span></div>
                            <button class="btn product__btn js-open-modal" data-form-id="modal-form-product" data-product-name="Ноутбук Huawei MateBook D 16 RLEF-X">заказать </button>
                        </div>
                        <div class="product__loan">Вы можете приобрести товар в кредит</div>
                    </div>
                    <div class="product__tooltip">
                        <div class="product__tooltip__item">
                            <img src="./assets/image/product-icon1.svg">
                            <div class="product__tooltip__block">
                                <div class="product__tooltip__title">Оплата</div>
                                <div class="product__tooltip__text">Оплачивайте покупки удобным способом. В интернет-магазине доступно 3 варианта оплаты.</div>
                            </div>
                        </div>
                        <div class="product__tooltip__item">
                            <img src="./assets/image/product-icon2.svg">
                            <div class="product__tooltip__block">
                                <div class="product__tooltip__title">Доставка</div>
                                <div class="product__tooltip__text">Экономьте время на получении заказа. В интернет-магазине доступно 4 варианта доставки.</div>
                            </div>
                        </div>
                        <div class="product__tooltip__item">
                            <img src="./assets/image/product-icon3.svg">
                            <div class="product__tooltip__block">
                                <div class="product__tooltip__title">Самовывоз</div>
                                <div class="product__tooltip__text">Заберите заказ сами из нашего магазина.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product" data-product-id="005">
                <div class="product__name">Ноутбук Huawei MateBook D 16 RLEF-X</div>
                <div class="product__article">Артикул: 00 - 00024465</div>
                <div class="product__row">
                    <div class="product__gallery">
                        <div class="product__detail js-product-detail">
                            <img src="./assets/image/product-detail1.png">
                        </div>
                        <div class="product__thumb">
                            <div class="product__thumb__nav product__thumb__nav_005"></div>
                            <div class="product__thumb__slider owl-carousel owl-theme js-product-thumb">
                                <img data-detail-img="/assets/image/product-detail1.png" src="./assets/image/laptop-thumb1.png">
                                <img data-detail-img="/assets/image/product-detail2.png" src="./assets/image/laptop-thumb2.png">
                                <img data-detail-img="/assets/image/product-detail3.png" src="./assets/image/laptop-thumb3.png">
                                <img data-detail-img="/assets/image/product-detail4.png" src="./assets/image/laptop-thumb4.png">
                            </div>
                        </div>
                    </div>
                    <div class="product__left__mobile">
                        <div class="product__gallery__mobile owl-carousel owl-theme">
                            <img src="./assets/image/product-detail1.png">
                            <img src="./assets/image/product-detail2.png">
                            <img src="./assets/image/product-detail3.png">
                            <img src="./assets/image/product-detail4.png">
                        </div>
                        <div class="product__tooltip">
                            <div class="product__tooltip__item">
                                <img src="./assets/image/product-icon1.svg">
                                <div class="product__tooltip__block">
                                    <div class="product__tooltip__title">Оплата</div>
                                    <div class="product__tooltip__text">Оплачивайте покупки удобным способом. В интернет-магазине доступно 3 варианта оплаты.</div>
                                </div>
                            </div>
                            <div class="product__tooltip__item">
                                <img src="./assets/image/product-icon2.svg">
                                <div class="product__tooltip__block">
                                    <div class="product__tooltip__title">Доставка</div>
                                    <div class="product__tooltip__text">Экономьте время на получении заказа. В интернет-магазине доступно 4 варианта доставки.</div>
                                </div>
                            </div>
                            <div class="product__tooltip__item">
                                <img src="./assets/image/product-icon3.svg">
                                <div class="product__tooltip__block">
                                    <div class="product__tooltip__title">Самовывоз</div>
                                    <div class="product__tooltip__text">Заберите заказ сами из нашего магазина.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__info">
                        <span class="product__availability">В наличии</span>
                        <div class="product__chars">15.6", AMD Ryzen 5 5600H, ядра: 6 х 3.3 ГГц, GeForce RTX 3050 для ноутбуков 4 ГБ, SSD 512 ГБ, RAM 16 ГБ, без ОС, HUAWEI</div>
                        <a class="product__link">Все характеристики <img src="./assets/image/arrow-link.svg"></a>
                        <div class="product__bottom">
                            <div class="product__price">9 900 <span>₽</span></div>
                            <button class="btn product__btn js-open-modal" data-form-id="modal-form-product" data-product-name="Ноутбук Huawei MateBook D 16 RLEF-X">заказать </button>
                        </div>
                        <div class="product__loan">Вы можете приобрести товар в кредит</div>
                    </div>
                    <div class="product__tooltip">
                        <div class="product__tooltip__item">
                            <img src="./assets/image/product-icon1.svg">
                            <div class="product__tooltip__block">
                                <div class="product__tooltip__title">Оплата</div>
                                <div class="product__tooltip__text">Оплачивайте покупки удобным способом. В интернет-магазине доступно 3 варианта оплаты.</div>
                            </div>
                        </div>
                        <div class="product__tooltip__item">
                            <img src="./assets/image/product-icon2.svg">
                            <div class="product__tooltip__block">
                                <div class="product__tooltip__title">Доставка</div>
                                <div class="product__tooltip__text">Экономьте время на получении заказа. В интернет-магазине доступно 4 варианта доставки.</div>
                            </div>
                        </div>
                        <div class="product__tooltip__item">
                            <img src="./assets/image/product-icon3.svg">
                            <div class="product__tooltip__block">
                                <div class="product__tooltip__title">Самовывоз</div>
                                <div class="product__tooltip__text">Заберите заказ сами из нашего магазина.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__footer">
            <button class="btn btn_t">
                смотреть все товары
                <img src="./assets/image/arrow.svg">
            </button>
        </div>
    </div>
</section>

<section class="text">
    <div class="container">
        <h2>Как быстро и дорого продать ноутбук?</h2>
        <p>Наша компания может предложить максимально выгодные условия скупки ноутбуков и другой компьютерной техники и электроники. При этом сам процесс не отнимет у вас много времени, специалисту потребуется не более 15 минут на диагностику и оценку.</p>
        <p>Мы покупаем ноутбуки в любом состоянии:</p>
        <ul>
            <li>новые;</li>
            <li>бу;</li>
            <li>нерабочие;</li>
            <li>старые;</li>
            <li>на запчасти (не подлежащие ремонту).</li>
        </ul>
        <p>А также нетбуки, компьютеры, планшеты, моноблоки, телевизоры и мобильные телефоны. Сдайте ваш девайс уже сегодня и получите до 95% денег
            от рыночной стоимости устройства.</p>
        <p>Неработающий ноутбук может принести прибыль своему владельцу. Для этого его нужно выгодно продать, не опасаясь мошенничества или заниженной оценки.</p>
        <p>Воспользуйтесь скупкой – это самый простой и надежный способ избавиться от ненужной техники и при этом неплохо заработать.
            Если вы по каким-то причинам не пользуетесь ноутбуком, не нужно выбрасывать его или задвигать на дальнюю полку.Наша скупка поможет решить проблему быстро и без лишних усилий.Оценщик в течение часа приедет к вам домой, осмотрит устройство и выдаст деньги наличными.
            Вам не придется подавать объявление и тратить время в ожидании покупателя.</p>
        <p>Продайте свой ноутбук, а вырученные средства используйте на полезные покупки!</p>
    </div>
</section>

<section class="callback">
    <div class="container">
        <form class="form callback__form" data-id="modal-form-callback">
            <div class="form__title">Остались <span>вопросы?</span></div>
            <div class="form__subtitle">Получите бесплатную консультацию</div>
            <fieldset>
                <label>Ваш телефон*</label>
                <input type="tel" placeholder="+7 (___) ___ - __ - __">
                <div class="error-text">* Поле не заполнено</div>
            </fieldset>
            <button class="btn">Заказать звонок</button>
        </form>
    </div>
</section>

<section class="contacts">
    <div class="contacts__container">
        <div class="title left">Контакты</div>
        <div class="contacts__wrapper">
            <div class="contacts__info">
                <div class="contacts__info__wrapper">
                    <a class="contacts__info__item" href="tel:+7 (923) 140-99-52">
                        <img src="./assets/image/phone.svg">
                        <span>+7 (923) 140-99-52</span>
                    </a>
                    <a class="contacts__info__item" href="mailto:e-mail@mail.ru">
                        <img src="./assets/image/mail.svg">
                        <span>e-mail@mail.ru</span>
                    </a>
                    <div class="contacts__info__item">
                        <img src="./assets/image/schedule-orange.svg">
                        <span>Пн-Вс с 10:00-20:00</span>
                    </div>
                    <div class="contacts__info__item">
                        <img src="./assets/image/location-orange.svg">
                        <span>г. Новосибирск,<br> ул. Челюскинцев 44/2, офис 209</span>
                    </div>
                </div>
                <div class="contacts__social">
                    <a><img src="./assets/image/whatsapp.svg"></a>
                    <a><img src="./assets/image/telegram.svg"></a>
                    <a><img src="./assets/image/vk.svg"></a>
                </div>
            </div>
            <div class="contacts__map">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A865fb4c4bea69b908a1e6311adc93c445b3d895c7173daf4f5efb5badb290836&amp;source=constructor" width="768" height="457" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="footer__row">
            <div class="footer__col">
                <a href="/" class="footer__logo">
                    <img src="./assets/image/logo.svg">
                </a>
                <div class="footer__slogan">магазин ноутбуков</div>
            </div>
            <div class="footer__col footer__menu">
                <nav>
                    <a>НОУТБУКИ</a>
                    <a>КОМПЬЮТЕРЫ</a>
                    <a>ДОСТАВКА И ОПЛАТА</a>
                    <a>СКУПКА</a>
                    <a>КОНТАКТЫ</a>
                </nav>
            </div>
            <div class="footer__col">
                <div class="footer__wrapper">
                    <div class="footer__schedule">
                        <img src="./assets/image/schedule.svg">
                        <span>Пн-Вс с 10:00-20:00</span>
                    </div>
                    <a class="footer__phone" href="tel: +7 (923) 140-99-52">+7 (923) 140-99-52</a>
                    <button class="footer__callback js-open-modal" data-form-id="modal-form-callback">Обратный звонок</button>
                </div>
            </div>
        </div>
        <div class="footer__row">
            <div class="footer__col">
                <div class="footer__contacts">
                    <a class="footer__contacts__item" href="mailto:e-mail@mail.ru">
                        <img src="./assets/image/mail.svg">
                        <span>e-mail@mail.ru</span>
                    </a>
                    <div class="footer__contacts__item">
                        <img src="./assets/image/location-orange.svg">
                        <span>г. Новосибирск,<br> ул. Челюскинцев 44/2,<br> офис 209</span>
                    </div>
                </div>
            </div>
            <div class="footer__col footer__col_end">
                <div class="footer__social">
                    <div class="footer__social__title">Напишите нам:</div>
                    <div class="footer__social__wrapper">
                        <a><img src="./assets/image/whatsapp.svg"></a>
                        <a><img src="./assets/image/telegram.svg"></a>
                        <a><img src="./assets/image/vk.svg"></a>
                    </div>
                </div>
                <button class="btn btn_t js-open-modal" data-form-id="modal-form-callback">Заказать звонок</button>
            </div>
        </div>
        <div class="footer__row footer__bottom">
            <div class="footer__col">
                <a class="footer__policy">Политика конфиденциальности</a>
            </div>
            <div class="footer__col footer__col_end">
                <div class="footer__copyright">© 2023 d-tora.ru</div>
            </div>
        </div>
    </div>
</footer>

<button class="go-up js-scroll" href="#header">
    <img src="./assets/image/arrow-up.svg">
</button>

<div class="overlay" id="overlay"></div>

<section id="menu" class="menu">
    <button class="menu__close js-close-menu"><img src="./assets/image/close.svg"></button>
    <nav class="menu__menu">
        <a>НОУТБУКИ</a>
        <a>КОМПЬЮТЕРЫ</a>
        <a>ДОСТАВКА И ОПЛАТА</a>
        <a>СКУПКА</a>
        <a>КОНТАКТЫ</a>
    </nav>
    <div class="menu__location">
        <img src="./assets/image/location.svg">
        <span>г. Новосибирск,<br> ул. Челюскинцев 44/2, офис 209</span>
    </div>
    <div class="menu__wrapper">
        <div class="menu__schedule">
            <img src="./assets/image/schedule.svg">
            <span>Пн-Вс с 10:00-20:00</span>
        </div>
        <a class="menu__phone" href="tel: +7 (923) 140-99-52">+7 (923) 140-99-52</a>
        <button class="menu__callback__btn js-open-modal" data-form-id="modal-form-callback">Обратный звонок</button>
    </div>
    <div class="menu__social">
        <a><img src="./assets/image/whatsapp.svg"></a>
        <a><img src="./assets/image/telegram.svg"></a>
        <a><img src="./assets/image/vk.svg"></a>
    </div>
    <div class="menu__callback">
        <div class="menu__callback__title">Остались <span>вопросы?</span></div>
        <div class="menu__callback__subtitle">Получите бесплатную консультацию</div>
        <button class="btn js-open-modal" data-form-id="modal-form-callback">заказать звонок</button>
    </div>
</section>

<section id="modal" class="modal">
    <div class="modal__inner">
        <form class="form modal__item" data-id="modal-form-callback">
            <button class="modal__close js-close-modal"><img src="./assets/image/close.svg"></button>
            <div class="modal__title">Остались вопросы?</div>
            <div class="modal__subtitle">Оставьте заявку, мы свяжемся с Вами и проконсультируем по любым вопросам</div>
            <fieldset>
                <label>Ваш телефон*</label>
                <input type="tel" placeholder="+7 (___) ___ - __ - __">
                <div class="error-text">* Поле не заполнено</div>
            </fieldset>
            <button class="btn">Заказать звонок</button>
            <div class="form__policy checkbox">
                <input checked id="policy1" type="checkbox">
                <label for="policy1">Соглашаюсь с <a>условиями передачи данных</a></label>
            </div>
        </form>
        <form class="form modal__item" data-id="modal-form-product">
            <button class="modal__close js-close-modal"><img src="./assets/image/close.svg"></button>
            <div class="modal__title">Заказать товар</div>
            <fieldset>
                <label>Ваш телефон*</label>
                <input type="tel" placeholder="+7 (___) ___ - __ - __">
                <div class="error-text">* Поле не заполнено</div>
            </fieldset>
            <fieldset>
                <label>Товар</label>
                <input name="product_name" type="text">
                <div class="error-text">* Поле не заполнено</div>
            </fieldset>
            <button class="btn">Заказать товар</button>
            <div class="form__policy checkbox">
                <input checked id="policy1" type="checkbox">
                <label for="policy1">Соглашаюсь с <a>условиями передачи данных</a></label>
            </div>
        </form>
        <div class="modal__item" data-id="modal-success">
            <button class="modal__close js-close-modal"><img src="./assets/image/close.svg"></button>
            <div class="modal__title">Спасибо!</div>
            <div class="modal__subtitle">Ваша заявка успешно отправлена!<br> Скоро с Вами свяжется наш менеджер</div>
        </div>
        <div class="modal__item" data-id="modal-fail">
            <button class="modal__close js-close-modal"><img src="./assets/image/close.svg"></button>
            <div class="modal__title" style="color: var(--error);">Ошибка!</div>
            <div class="modal__subtitle">Заявка не отправлена!<br> Попробуйте позже или свяжитесь с нами по телефону</div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
<script src="./assets/lib/owl/owl.carousel.min.js" defer></script>
<script src="./assets/lib/showmore/readmore.min.js"></script>
<script src="./assets/lib/mask/mask.js"></script>
<script src="./assets/js/scripts.js"></script>
</body>
</html>
