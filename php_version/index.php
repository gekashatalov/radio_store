<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width">
        <title>Radio Store</title>
        <link rel="icon" href="./img/ColorOverlayLeft.svg">
        <link rel="stylesheet" href="./css/styles.css">
        <?php include './data.php'; ?>
    </head>
    <body>
        <header class="header">
            <div class="wrapper">
                <nav class="row_between nav">
                    <button type="button" class="nav-trigger">
                        <span class="menu"></span>
                    </button>
                    <div class="col header_menu">
                        <a href="#"><span>></span>О нас</a>
                        <a href="#"><span>></span>Новые поступления</a>
                        <a href="#"><span>></span>Доставка и оплата</a>
                        <a href="#"><span>></span>Прайс-листы</a>
                        <a href="#"><span>></span>Сотрудничество</a>
                        <a href="#"><span>></span>Контакты</a>
                    </div>
                    <div class="col header_signin">
                        <a href="#">Вход / Регистрация</a>
                    </div>
                </nav>
                <nav class="menu_toggle">
                    
                    <div class="menu_left"  style="display: none;">
                        <a href="#"><span>></span>О нас</a>
                        <a href="#"><span>></span>Новые поступления</a>
                        <a href="#"><span>></span>Доставка и оплата</a>
                        <a href="#"><span>></span>Прайс-листы</a>
                        <a href="#"><span>></span>Сотрудничество</a>
                        <a href="#"><span>></span>Контакты</a>
                    </div>
                    
                </nav>
                
            <hr>
                <div class="row_between header_info">
                    <div class="col header_link">
                        <a class="col header_main" href="">
                            <img src="./img/icon.svg" alt="">
                        </a>
                        <p class="col header_title">Электроные компоненты и радиодетали, источники питания и LED продукция</p>
                    </div>
                    <div class="col header_contact">
                        <div class="col header_phones">
                            <div class="header_phones_time">
                                <img src="./img/clock.svg" alt="">
                                <span>Пн -Пт 9:30 по 18:30</span>
                            </div>
                            <a href="tel:+380965976862">098 597 68 62</a>
                            <span>
                                <span>Все телефоны</span>
                                <i class="icon-marker"><img src="./img/icon-marker.svg" alt=""></i>
                            </span>
                        </div>
                        <div class="header_marks">
                            <div>
                                <button class="header_address">
                                    Наши адреса
                                    <i class="icon-marker">
                                        <img src="./img/icon-marker.svg" alt="">
                                    </i>
                                </button>
                                <div class="address_block" style="display: none;">
                                    <a href="https://goo.gl/maps/mzT2GGeb54NSkFXW8" target="blanc">
                                        <img src="./img/icons/adress.png" alt="">
                                        проспект Пушкина, 21, Дніпро́, Дніпропетровська область, 49000
                                    </a>
                                    <a href="https://goo.gl/maps/PcQJPMTZgM47r5at7" target="_blank" rel="noopener noreferrer">
                                        <img src="./img/icons/adress.png" alt="">                                        
                                        вулиця Маршала Малиновського, 2, Дніпро́, Дніпропетровська область, 49000
                                    </a>
                                    
                                </div>
                            </div>
                            <div>
                                <button>
                                    <i class="callback_icon">
                                        <img src="./img/callback_icon.svg" alt="">
                                    </i>
                                    Обратный звонок
                                </button>
                            </div>
                        </div>
                        <div class="header_basket">
                            <span class="goods_count">0</span>
                            <span class="basket">Корзина <br> 
                                <span class="total_price">0 грн</span> 
                            </span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row header_catalog">
                    <div class="header_catalog-trigger">
                        <div class="header_catalog-buter">
                            <span class="catalog-open"></span>
                        </div>
                        <span> Каталог товаров</span>                        
                    </div>
                    <table class="header_catalog-list" style="display: none">
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#" class="catalog-block">
                                        <div class="catalog-block-image">                                                
                                            <img src="./img/icons/smartphone.png" alt="">
                                        </div>
                                        <span>
                                            Смартфоны
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="catalog-block">
                                        <div class="catalog-block-image">                                                
                                            <img src="./img/icons/laptop.png" alt="">
                                        </div>
                                        <span>
                                            Ноутбуки
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="catalog-block">
                                        <div class="catalog-block-image">                                                
                                            <img src="./img/icons/monitor.png" alt="">
                                        </div>
                                        <span>
                                            Мониторы
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="catalog-block">
                                        <div class="catalog-block-image">                                                
                                            <img src="./img/icons/photo camera.png" alt="">
                                        </div>
                                        <span>
                                            Фотоаппараты
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="catalog-block">
                                        <div class="catalog-block-image">                                                
                                            <img src="./img/icons/printer.png" alt="">
                                        </div>
                                        <span>
                                            Принтеры
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="catalog-block">
                                        <div class="catalog-block-image">                                                
                                            <img src="./img/icons/microphone.png" alt="">
                                        </div>
                                        <span>
                                            Микрофоны
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="catalog-block">
                                        <div class="catalog-block-image">                                                
                                            <img src="./img/icons/car.png" alt="">
                                        </div>
                                        <span>
                                            Автомобильные аксесуары
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="header_catalog-search">
                        <input type="search" name="" placeholder="Поиск в каталоге">
                    </div>
                </div>
                <hr>
            </div>
        </header>


        <!-- First section-baner -->

        <section class="section__first wrapper-full ">
            <div class="slider-box row_between">
                <button class="slider_prev">
                    <img src="./img/btn_prev.png" alt="">
                </button>             
                <button class="slider_next">
                    <img src="./img/btn_next.png" alt="">
                </button>
            </div>
            <div class="slider slider_showed">
                <div class="slider_date">
                    <span class="date">
                        28 НОЯБРЯ - 29 ДЕКАБРЯ
                    </span>
                    <span class="percent">
                        10%
                    </span>
                    <span class="personal_discount">
                        Специальное предложение только для вас -10% скидки
                    </span>
                </div>
                <div class="baner_goods">
                    <div class="image_goods">
                        <img  src="./img/dialan.png" alt="">
                    </div>
                    <div class="goods">
                        <div class="goods_description">
                            Акустический кабель Dialan медь 2*0,75мм прозрачный ПВХ 1м
                        </div>
                        <span class="previous_value">БЫЛО 13,60 грн.</span>
                        <div class="price">
                            12,24 
                            <span>
                               грн.
                            </span>
                        </div>
                        <button class="slider_button">УСПЕЙТЕ КУПИТЬ</button>
                    </div>
                </div>
            </div>
            <div class="slider">
                <div class="slider_date">
                    <span class="date">
                        28 НОЯБРЯ - 29 ДЕКАБРЯ
                    </span>
                    <span class="percent">
                        10%
                    </span>
                    <span class="personal_discount">
                        Специальное предложение только для вас -10% скидки
                    </span>
                </div>
                <div class="baner_goods">
                    <div class="image_goods">
                        <img  src="./img/dialan.png" alt="">
                    </div>
                    <div class="goods">
                        <div class="goods_description">
                            Акустический кабель Dialan медь 2*0,75мм прозрачный ПВХ 1м
                        </div>
                        <span class="previous_value">БЫЛО 13,60 грн.</span>
                        <div class="price">
                            12,24 
                            <span>
                               грн.
                            </span>
                        </div>
                        <button class="slider_button">УСПЕЙТЕ КУПИТЬ</button>
                    </div>
                </div>
            </div>
            <div class="slider">
                <div class="slider_date">
                    <span class="date">
                        28 НОЯБРЯ - 29 ДЕКАБРЯ
                    </span>
                    <span class="percent">
                        10%
                    </span>
                    <span class="personal_discount">
                        Специальное предложение только для вас -10% скидки
                    </span>
                </div>
                <div class="baner_goods">
                    <div class="image_goods">
                        <img  src="./img/dialan.png" alt="">
                    </div>
                    <div class="goods">
                        <div class="goods_description">
                            Акустический кабель Dialan медь 2*0,75мм прозрачный ПВХ 1м
                        </div>
                        <span class="previous_value">БЫЛО 13,60 грн.</span>
                        <div class="price">
                            12,24 
                            <span>
                               грн.
                            </span>
                        </div>
                        <button class="slider_button">УСПЕЙТЕ КУПИТЬ</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section second -->

        <section class="wrapper ">
            <div class="section__second row row_between">
                <div class="section__second_card">
                    <span class="section__second_card-title">
                        АКЦИОННЫЕ ТОВАРЫ
                    </span>
                    <hr>
                    <span class="section__second_card-description">
                        Поступление нового товара за последние 7 календарных дней. Лучшие цены в Украине
                    </span>
                    <button class="section__second_card-button">ПОДРОБНЕЕ</button>
                </div>
                <div class="section__second_card">
                    <span class="section__second_card-title">
                        КАТАЛОГ ТОВАРОВ
                    </span>
                    <hr>
                    <span class="section__second_card-description">
                        Поступление нового товара за последние 7 календарных дней. Лучшие цены в Украине
                    </span>
                    <button class="section__second_card-button">ПОДРОБНЕЕ</button>
                </div><div class="section__second_card">
                    <span class="section__second_card-title">
                        НОВЫЕ ПОСТУПЛЕНИЯ
                    </span>
                    <hr>
                    <span class="section__second_card-description">
                        Поступление нового товара за последние 7 календарных дней. Лучшие цены в Украине
                    </span>
                    <button class="section__second_card-button">ПОДРОБНЕЕ</button>
                </div>
            </div>
        </section>

        <!-- Section third Best deals -->

        
        <section class="wrapper  ">
            <div class="best__deals_header row-flex">
                <span class="best__deals_header-title">
                    Лучшие предложения
                </span>
                <span class="horizontal_line"></span>
                <div class="owl-nav">
                    <button class="best__deals_header-btnPrev owl-prev" role="presentation">
                        <img src="./img/btn_prev.png" alt="">
                    </button>
                    <button class="best__deals_header-btnNext owl-next" role="presentation">
                        <img src="./img/btn_next.png" alt="">
                    </button>
                </div>
            </div>
            <div class="best__deals_body owl-carousel row-flex">
                <?php foreach($cards as $card):?>
                <div class="best__deals_body-card <?=$card["class"]?>" data-count="0">
                    <div class="flag">
                        <img src=<?=$card["labelImage"]?> alt="">
                        <span><?=$card["label"]?></span>
                    </div>
                    <div class="best__deals_body-card_img">
                        <img src=<?=$card["image"]?> alt="">
                    </div>
                    <div class="best__deals_body-card_description">
                        <span><?=$card["description"]?></span>
                    </div>
                    <div class="best__deals_body-card_cost row" >
                        <div class="best__deals_body-card-delivery">
                            <img src="./img/delivery.svg" alt="">
                            <span>Есть доставка</span>
                            <br>
                            <img src="./img/check_mark.svg" alt="">
                            <span>В наличии <?=$card["availability"]?> шт.</span>
                        </div>
                        <div class="best__deals_body-card-price">
                            <span>Цена за шт.</span>
                            <br>
                            <span class="best__deals_body-card-price-actual" data-price=<?=$card["price"]?>><?=$card["price"]?> грн</span>
                        </div>
                    </div>
                    <div class="best__deals_body-card-btns">
                        <button class="best__deals_body-card-buy">КУПИТЬ</button>
                        <button class="best__deals_body-card-buyClick">Заказать в <b>1</b> клик</button>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </section>

        <!-- Section fourth: About us -->

        <section class="wrapper">
            <div class="row section__fourth">
                <div class="about_us">
                    <div class="section__fourth-title">
                        <span>
                            О нас
                        </span>
                    </div>
                    <div class="about_us-content">
                        <span> 
                            Мы являемся современной, быстро развивающейся компанией, в которой основными принципами работы являются высокий профессионализм, ответственность перед каждым клиентом и надежность гарантируемого результата. 
                            <br>
                            <br>
                            В жизнь эти принципы воплощаются командой высококвалифицированных специалистов, которые работают на благо компании и разделяют общие ценности и цели.
                        </span>
                        <button class="about_us-more">
                            Подробнее 
                            <img src="./img/more.png" alt="">
                        </button>
                    </div>
                </div>
                <div class="product_day">
                    <div class="section__fourth-title">
                        <span>
                            Товар дня
                        </span>
                    </div>
                    <div class="product_day-card">
                        <div class="product_day-card_img">
                            <img src="./img/goods.png" alt="">
                        </div>
                        <div class="product_day-card_content">
                            <div class="product_day-card_description">
                                <span>Автомобильный блок питания для ноутбука ASUS W5G00A 19V 3.42 A 5.5x2.5</span>
                            </div>
                            <div class="product_day-card_cost row">
                                <div class="product_day-card-delivery">
                                    <img src="./img/delivery.svg" alt="">
                                    <span>Есть доставка</span>
                                    <br>
                                    <img src="./img/check_mark.svg" alt="">
                                    <span>В наличии 23 шт.</span>
                                </div>
                                <div class="product_day-card-price">
                                    <span>Цена за шт.</span>
                                    <br>
                                    <span class="product_day-card-price-actual">188,40 грн</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product_day-card">
                        <div class="product_day-card_img">
                            <img src="./img/goods.png" alt="">
                        </div>
                        <div class="product_day-card_content">
                            <div class="product_day-card_description">
                                <span>Автомобильный блок питания для ноутбука ASUS W5G00A 19V 3.42 A 5.5x2.5</span>
                            </div>
                            <div class="product_day-card_cost row">
                                <div class="product_day-card-delivery">
                                    <img src="./img/delivery.svg" alt="">
                                    <span>Есть доставка</span>
                                    <br>
                                    <img src="./img/check_mark.svg" alt="">
                                    <span>В наличии 23 шт.</span>
                                </div>
                                <div class="product_day-card-price">
                                    <span>Цена за шт.</span>
                                    <br>
                                    <span class="product_day-card-price-actual">188,40 грн</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="usefulness">
                    <div class="section__fourth-title">
                        <span>
                            Полезности
                        </span>
                    </div>
                    <div class="usefulness__content">
                        <div class="usefulness__content-card">
                            <div class="usefulness__content-card-date">
                                <span class="usefulness__content-card-date-day">
                                    15
                                </span>
                                <span class="usefulness__content-card-date-month">
                                    декабря
                                </span>
                            </div>
                            <div class="usefulness__content-card-description">
                                <span class="usefulness__content-card-description-title">
                                    Обзор паяльной станции Yihua 898BD+ 2 в 1
                                </span>
                                <span class="usefulness__content-card-description-body">
                                    Представляем Вашему вниманию видеообзор паяльнойстанции ...
                                </span>
                            </div>
                        </div>
                        <div class="usefulness__content-card">
                            <div class="usefulness__content-card-date">
                                <span class="usefulness__content-card-date-day">
                                    17
                                </span>
                                <span class="usefulness__content-card-date-month">
                                    декабря
                                </span>
                            </div>
                            <div class="usefulness__content-card-description">
                                <span class="usefulness__content-card-description-body">
                                    Представляем Вашему вниманию видеообзор паяльнойстанции ...
                                </span>
                            </div>
                        </div>
                        <div class="usefulness__content-card">
                            <div class="usefulness__content-card-date">
                                <span class="usefulness__content-card-date-day">
                                    19
                                </span>
                                <span class="usefulness__content-card-date-month">
                                    декабря
                                </span>
                            </div>
                            <div class="usefulness__content-card-description">
                                <!-- <span class="usefulness__content-card-description-title">
                                    
                                </span> -->
                                <span class="usefulness__content-card-description-body">
                                    Представляем Вашему вниманию видеообзор паяльнойстанции ...
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        
        <footer class="footer wrapper-full">
            <div class="footer__firstLine">
                <div class="wrapper">
                    <div class="row">
                        <a href="#" class="footer__firstLine-link">
                            <div class="footer__firstLine-link-logo">
                                <img src="./img/footer-basket.svg" alt="">
                            </div>
                            <div class="footer__firstLine-link-description">
                                <span class="footer__firstLine-link-description-title"> 
                                    НОВЫЕ ПОСТУПЛЕНИЯ
                                </span>
                                <span class="footer__firstLine-link-description-text"> 
                                    Быстрая доставка по всей Украине
                                </span>
                            </div>
                        </a>
                        <a href="#" class="footer__firstLine-link">
                            <div class="footer__firstLine-link-logo">
                                <img src="./img/delivery (2).svg" alt="">
                            </div>
                            <div class="footer__firstLine-link-description">
                                <span class="footer__firstLine-link-description-title"> 
                                    ОПЛАТА И ДОСТАВКА
                                </span>
                                <span class="footer__firstLine-link-description-text"> 
                                    Быстрая доставка по всей Украине
                                </span>
                            </div>
                        </a>
                        <a href="#" class="footer__firstLine-link">
                            <div class="footer__firstLine-link-logo">
                                <img src="./img/praice.svg" alt="">
                            </div>
                            <div class="footer__firstLine-link-description">
                                <span class="footer__firstLine-link-description-title"> 
                                    НАШИ ПРАЙС-ЛИСТЫ
                                </span>
                                <span class="footer__firstLine-link-description-text"> 
                                    Быстрая доставка по всей Украине
                                </span>
                            </div>
                        </a>
                        <a href="#" class="footer__firstLine-link">
                            <div class="footer__firstLine-link-logo">
                                <img src="./img/geo.svg" alt="">
                            </div>
                            <div class="footer__firstLine-link-description">
                                <span class="footer__firstLine-link-description-title"> 
                                    НАШИ МАГАЗИНЫ
                                </span>
                                <span class="footer__firstLine-link-description-text"> 
                                    Быстрая доставка по всей Украине
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer__secondLine">
                <div class="wrapper">
                    <div class="row">
                        <div class="footer__secondLine-links">
                            <span class="footer__secondLine-links-title">
                                О компании
                            </span>
                            <a href="#">Новое поступление</a>
                            <a href="#">Новости</a>
                            <a href="#">Контакты</a>
                            <a href="#">Дропшопинг с нами</a>
                            <a href="#">Сотрудничество с предприятиями</a>
                        </div>
                        <div class="footer__secondLine-links">
                            <span class="footer__secondLine-links-title">
                                Сервис
                            </span>
                            <a href="#">Доставка и оплата</a>
                            <a href="#">Наши прайс-листы</a>
                            <a href="#">Каталог товаров</a>
                        </div>
                        <div class="footer__secondLine-links">
                            <span class="footer__secondLine-links-title">
                                Звоните нам
                            </span>
                            <a href="tel:+380965976862">
                                096 597-68-62
                            </a>
                            <span class="footer__secondLine-links-address">
                                пр. Правды 83/3
                            </span>
                            <a href="tel:+380971140918">
                                097 114-09-18
                            </a>                            
                            <span class="footer__secondLine-links-address">
                                пр. Д. Яворницкого, 121
                            </span>
                            <a href="tel:+380957946582">
                                095 794-65-82
                            </a>                            
                            <span class="footer__secondLine-links-address">
                                пр. Слобожанский, 83
                            </span>
                        </div>
                        <div class="footer__secondLine-links">
                            <span class="footer__secondLine-links-title ">
                                Мы в соц сетях
                            </span>
                            <div class="footer__secondLine-links-social">
                                <a href="http://vk.com" target="_blank"><img src="./img/vkontakte.png" alt=""></a>
                                <a href="http://facebook.com" target="_blank"><img src="./img/facebook.png" alt=""></a>
                                <a href="http://ok.ru" target="_blank"><img src="./img/ok.png" alt=""></a>
                            </div>
                            <span class="footer__secondLine-links-social-about">
                                © 2016 Radio Store <br> Разработка сайта
                                <a href="http://" target="_blank">First Ukrainian Studio</a>
                             </span>
                        </div>
                    </div>
                </div>
            </div>
        </footer> 
        <section>
            <div class="block_form">
                <button class="form-close"><img src="./img/icons/close.png" alt=""></button>
                <form class = "form-checkout" action="">
                    <h3>Оформление заказа</h3>
                    <input type="text" name="name" id="form_name" placeholder="Имя">
                    <input type="tel" name="tel" id="form_tel" placeholder="+38(___)___-___ ">
                    <input type="email" name="email" id="form_email" placeholder="E-mail">
                    <button type="submit">Оформить</button>
                </form>
            </div>
            <div class="block_basket">
                <button class="backet-close"><img src="./img/icons/close.png" alt=""></button>
                <div class="block_basket-goods">

                </div>
                <div class="block_basket-control">
                    <span>
                        Сумма к оплате:
                        <span class="total_price">0</span>
                    </span>
                    
                    <button class="block_basket-checkout">Оформить</button>            
                </div>

            </div>
            <div class="overlay"></div>
        </section>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="./js/jquery.validate.min.js"></script>
        <script src="./js/owl.carousel.min.js"></script>
        <script src="./js/scripts.js"></script>
    </body>
</html>