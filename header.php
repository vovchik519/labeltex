<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ультралейбл</title>
    <link rel="stylesheet" href="./css/style.min.css">
    <link rel="stylesheet" href="./css/page-style.min.css">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__menu-wrapper" id="header__menu-wrapper">
                <div class="header__supinfo-wrap">
                    <div class="header__supinfo">
                        <p class="header__supinfo-key">
                            швейная фурнитура, Материалы для печати, этикетки, ленты, полиграфия под заказ
                        </p>
                        <div class="supinfo__data">
                            <div class="supinfo__data-text">
                                <a href="tel:84955893122">+7 (495) 589-31-22</a>
                                <span class="supinfo__center-link-left"></span>
                                <a href="mailto:info@labeltex.ru">info@labeltex.ru</a>
                                <span class="supinfo__center-link-right"></span>
                                <p>пн-пт: 9:00-18:00, сб-вс: выходной</p>
                            </div>
                            <div class="header__social">
                                <a href="https://www.instagram.com/labeltex.ru/" target="_blank" class="icon-insta"></a>
                                <a href="https://www.facebook.com/labeltex.ru/" target="_blank" class="icon-fb"></a>
                                <a href="https://vk.com/labeltexetik" target="_blank" class="icon-vk"></a>
                                <a href="https://t.me/ultralabel​​​​​​​" target="_blank" class="icon-tg"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="header__menu">
                        <a href="index.php" class="logo"><img src="img/header/logo.svg" alt="Ультралейбл"></a>
                        <div class="header__menu-link">
                            <nav class="header__nav">
                                <a href="#!" class="icon-entry auth-mobile">Вход / регистрация</a>
                                <div class="nav__list-flex">
                                    <ul class="nav__list">
                                        <li class="nav__item">
                                            <p class="nav__link"><span>О компании</span><span class="icon-next-small"></span></p>
                                            <?php
                                            include("item-menu.php");
                                            itemMenuOne();
                                            ?>
                                            <p class="item__menu-name"><span class="icon-next-big"></span><span>О компаний</span>
                                            </p>
                                            <?php
                                            itemMenuTwo();
                                            ?>
                                            <ul class="item__menu">
                                                <li class="active">
                                                    <a>Наше производство<span class="icon-next-small"></span></a>
                                                </li>
                                                <li>
                                                    <a>Портфолио работ<span class="icon-next-small"></span></a>
                                                </li>
                                                <li>
                                                    <a>Отзывы<span class="icon-next-small"></span></a>
                                                </li>
                                            </ul>
                                            <?php
                                            itemMenuThree();
                                            ?>
                                        </li>
                                        <li class="nav__item">
                                            <p class="nav__link"><span>Продукция</span><span class="icon-next-small"></span></p>
                                            <?php
                                            itemMenuOne();
                                            ?>
                                            <p class="item__menu-name"><span class="icon-next-big"></span><span>Продукция</span>
                                            </p>
                                            <?php
                                            itemMenuTwo();
                                            ?>
                                            <ul class="item__menu">
                                                <li class="active">
                                                    <p>Этикетки и ленты в наличии<span class="icon-next-small"></span></p>
                                                    <ul class="popUpMenu active">
                                                        <li><a href="#!">Георгиевские ленты</a></li>
                                                        <li><a href="#!">Российские ленты</a></li>
                                                        <li><a href="#!">Свадебные ленты</a></li>
                                                        <li><a href="#!">Сувенирные ленты</a></li>
                                                        <li><a href="#!">Школьные ленты</a></li>
                                                        <li><a href="#!">Составники</a></li>
                                                        <li><a href="#!">Размерники</a></li>
                                                        <li><a href="#!">Размерная сетка</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <p>Материалы для печати<span class="icon-next-small"></span></p>
                                                    <ul class="popUpMenu">
                                                        <li><a href="#!">Искусственная кожа</a></li>
                                                        <li><a href="#!">Атласные текстильные ленты</a></li>
                                                        <li><a href="#!">Сатиновые текстильные ленты</a></li>
                                                        <li><a href="#!">Нейлоновые текстильные ленты</a></li>
                                                        <li><a href="#!">Полиэстеровые текстильные ленты</a></li>
                                                        <li><a href="#!">Ацетатные текстильные ленты</a></li>
                                                        <li><a href="#!">Тафтяные текстильные ленты</a></li>
                                                        <li><a href="#!">Хлопковые текстильные ленты</a></li>
                                                        <li><a href="#!">Репсовые текстильные ленты</a></li>
                                                        <li><a href="#!">Ленты для сублимации</a></li>
                                                        <li><a href="#!">Риббоны</a></li>
                                                        <li><a href="#!">Красители ORVAC</a></li>
                                                        <li><a href="#!">Фольга металлизированная</a></li>
                                                        <li><a href="#!">Светоотражающие ленты</a></li>
                                                        <li><a href="#!">Силиконовые ленты</a></li>
                                                        <li><a href="#!">Киперная лента</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <p>Клеевые материалы<span class="icon-next-small"></span></p>
                                                    <ul class="popUpMenu">
                                                        <li><a href="#!">Клеевые ленты</a></li>
                                                        <li><a href="#!">Флизелин и дублерин</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <p>Георгиевские и триколор ленты<span class="icon-next-small"></span></p>
                                                    <ul class="popUpMenu">
                                                        <li><a href="#!">Георгиевские ленты</a></li>
                                                        <li><a href="#!">Триколор ленты</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <p>Фурнитура<span class="icon-next-small"></span></p>
                                                    <ul class="popUpMenu">
                                                        <li><a href="#!">Биркодержатели для этикет-пистолета</a></li>
                                                        <li><a href="#!">Пломбы-замочки</a></li>
                                                        <li><a href="#!">Пуллер-подвес</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <p>Металлофурнитура<span class="icon-next-small"></span></p>
                                                    <ul class="popUpMenu">
                                                        <li><a href="#!">Кнопки</a></li>
                                                        <li><a href="#!">Люверсы</a></li>
                                                        <li><a href="#!">Хольнитены</a></li>
                                                        <li><a href="#!">Пряжки</a></li>
                                                        <li><a href="#!">Полукольца</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#!">Акции<span class="icon-next-small"></span></a>
                                                </li>
                                            </ul>
                                            <?php
                                            itemMenuThree();
                                            ?>
                                        </li>
                                        <li class="nav__item">
                                            <a href="#!" class="nav__link">Услуги</a>
                                            <?php
                                            itemMenuOne();
                                            ?>
                                            <p class="item__menu-name"><span class="icon-next-big"></span><span>Услуги</span>
                                            </p>
                                            <?php
                                            itemMenuTwo();
                                            ?>
                                            <ul class="item__menu">
                                                <li class="active">
                                                    <p>Этикетки и бирки на заказ<span class="icon-next-small"></span></p>
                                                    <ul class="popUpMenu active">
                                                        <li><a href="#!">Каучуковые (PVC) этикетки</a></li>
                                                        <li><a href="#!">Жаккардовые тканные этикетки</a></li>
                                                        <li><a href="#!">Жаккардовые шевроны</a></li>
                                                        <li><a href="#!">Жаккардовая тесьма</a></li>
                                                        <li><a href="#!">Картонные ярлыки</a></li>
                                                        <li><a href="#!">Печать этикеток</a></li>
                                                        <li><a href="#!">Пломбы с логотипом</a></li>
                                                        <li><a href="#!">Пуллер для молнии</a></li>
                                                        <li><a href="#!">Кожаные нашивки</a></li>
                                                        <li><a href="#!">Самоклеящиеся текстильные этикетки</a></li>
                                                        <li><a href="#!">Светоотражающие элементы</a></li>
                                                        <li><a href="#!">Детские этикетки и бирки</a></li>
                                                        <li><a href="#!">Военные шевроны</a></li>
                                                        <li><a href="#!">ВЫШИВКА добавить</a></li>
                                                        <li><a href="#!">Самоклеящиеся этикетки для принтеров</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <p>Декоративные ленты на заказ<span class="icon-next-small"></span></p>
                                                    <ul class="popUpMenu">
                                                        <li><a href="#!">Ленты для акции</a></li>
                                                        <li><a href="#!">Ленты для бейджей</a></li>
                                                        <li><a href="#!">Свадебные ленты</a></li>
                                                        <li><a href="#!">Ленты выпускника</a></li>
                                                        <li><a href="#!">Новогодние ленты</a></li>
                                                        <li><a href="#!">Ритуальные ленты</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <p>Изготовление полиграфии<span class="icon-next-small"></span></p>
                                                    <ul class="popUpMenu">
                                                        <li><a href="#!">Брошюры, Каталоги, Проспекты</a></li>
                                                        <li><a href="#!">Буклеты,Лифлеты</a></li>
                                                        <li><a href="#!">Листовки, флаеры</a></li>
                                                        <li><a href="#!">Ценники</a></li>
                                                        <li><a href="#!">Вобблеры,Некхенгеры</a></li>
                                                        <li><a href="#!">Наклейки</a></li>
                                                        <li><a href="#!">Визитки</a></li>
                                                        <li><a href="#!">Бланки</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#!">Печать на текстильной ленте<span class="icon-next-small"></span></a>
                                                </li>
                                                <li>
                                                    <a href="#!">Печать штрих кодов<span class="icon-next-small"></span></a>
                                                </li>
                                                <li>
                                                    <a href="#!">Нарезка лент<span class="icon-next-small"></span></a>
                                                </li>
                                                <li>
                                                    <a href="#!">Сборка бантов<span class="icon-next-small"></span></a>
                                                </li>
                                            </ul>
                                            <?php
                                            itemMenuThree();
                                            ?>
                                        </li>
                                        <li class="nav__item">
                                            <a href="#!" class="nav__link">Доставка и оплата</a>
                                        </li>
                                        <li class="nav__item">
                                            <a href="#!" class="nav__link">Информация</a>
                                            <?php
                                            itemMenuOne();
                                            ?>
                                            <p class="item__menu-name"><span class="icon-next-big"></span><span>Информация</span>
                                            </p>
                                            <?php
                                            itemMenuTwo();
                                            ?>
                                            <ul class="item__menu">
                                                <li class="active">
                                                    <a href="#!">Оптовикам<span class="icon-next-small"></span></a>
                                                </li>
                                                <li>
                                                    <a href="#!">Статьи<span class="icon-next-small"></span></a>
                                                </li>
                                                <li>
                                                    <a href="#!">FAQ<span class="icon-next-small"></span></a>
                                                </li>
                                                <li>
                                                    <a href="#!">Словарь терминов<span class="icon-next-small"></span></a>
                                                </li>
                                                <li>
                                                    <a href="#!">Карты цветов<span class="icon-next-small"></span></a>
                                                </li>
                                                <li>
                                                    <a href="#!">Технические требования<span class="icon-next-small"></span></a>
                                                </li>
                                                <li>
                                                    <a href="#!">Публичная оферта<span class="icon-next-small"></span></a>
                                                </li>
                                                <li>
                                                    <a href="#!">Политика конфиденциальности<span class="icon-next-small"></span></a>
                                                </li>
                                            </ul>
                                            <?php
                                            itemMenuThree();
                                            ?>
                                        </li>
                                        <li class="nav__item">
                                            <a href="#!" class="nav__link"><span>Контакты</span><span class="icon-next-small"></span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="supinfo__data-mobile">
                                    <div class="supinfo__data-text-mobile">
                                        <a href="tel:84955893122">+7 (495) 589-31-22</a>
                                        <a href="mailto:info@labeltex.ru">info@labeltex.ru</a>
                                    </div>
                                    <div class="header__social-mobile">
                                        <a href="https://www.instagram.com/labeltex.ru/" target="_blank" class="icon-insta"></a>
                                        <a href="https://www.facebook.com/labeltex.ru/" target="_blank" class="icon-fb"></a>
                                        <a href="https://vk.com/labeltexetik" target="_blank" class="icon-vk"></a>
                                        <a href="https://t.me/ultralabel​​​​​​​" target="_blank" class="icon-tg"></a>
                                    </div>
                                </div>
                            </nav>
                            <div class="extra__menu">
                                <p class="icon-entry extra-auth"></p>
                                <a href="#!" class="icon-cart"></a>
                                <p class="extra__menu-search icon-search"></p>
                            </div>
                            <div class="header__burger">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search__wrapper">
                <div class="search__wrap">
                    <div class="search-exit icon-close"></div>
                    <div class="search__form">
                        <form>
                            <input class="search__form-input" type="text" placeholder="Поиск">
                            <button class="icon-search" type="submit"></button>
                        </form>
                        <p class="search-info">Длина фразы должна быть не менее 3 символов и не более 200</p>
                        <p class="search-info-amount">Найдено совпадений: 100 </p>
                    </div>
                    <div class="search__container">
                        <div class="search-page">
                            <div class="search__block">
                                <h4>продукция</h4>
                                <h5>Лента светоотражающая TBY отр.R300 шир.50мм хлопок+полиэстер</h5>
                                <p class="search__block-info-desk">Светоотражающая лента для одежды — это, прежде
                                    всего, залог безопасности. Ее
                                    использование в разы увеличивает видимость пешехода в темное время суток.
                                    Светоотражающие ленты для одежды активно используются в различных сферах
                                    деятельности. В
                                    первую очередь, они необходимы для пошива спецодежды для работников <span class="search__block-info-end">...</span></p>
                                <p class="search__block-info-mobile">Светоотражающая лента для одежды — это, прежде
                                    всего <span class="search__block-info-end">...</span></p>
                            </div>
                            <div class="search__block">
                                <h4>продукция</h4>
                                <h5>Лента светоотражающая TBY отр.R300 шир.50мм хлопок+полиэстер</h5>
                                <p class="search__block-info-desk">Светоотражающая лента для одежды — это, прежде
                                    всего, залог безопасности. Ее
                                    использование в разы увеличивает видимость пешехода в темное время суток.
                                    Светоотражающие ленты для одежды активно используются в различных сферах
                                    деятельности. В
                                    первую очередь, они необходимы для пошива спецодежды для работников <span class="search__block-info-end">...</span></p>
                                <p class="search__block-info-mobile">Светоотражающая лента для одежды — это, прежде
                                    всего <span class="search__block-info-end">...</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search__scroll-wrap">
                    <a href="#!" class="search__open-mobile">...</a>
                    <div class="search__scroll">
                        <div class="search__scroll-prev">Предыдущая</div>
                        <div class="search__scroll-center-wrap">
                            <div class="search__scroll-center-prev icon-prev-small"></div>
                            <div class="search__scroll-center-pagination">
                                <p class="current-page">1</p><span>/</span>
                                <p class="total-pages">10</p>
                            </div>
                            <div class="search__scroll-center-next icon-next-small"></div>
                        </div>
                        <div class="search__scroll-next">Следующая</div>
                    </div>
                </div>
            </div>
        </header>
        <main class="main">