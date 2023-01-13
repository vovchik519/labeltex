<?php

function itemMenuOne()
{
    print '
<div class="item__menu-wrapper">
';
}
function itemMenuTwo()
{
    print '
<div class="item__menu-wrapper">
<p class="item__menu-name"><span class="icon-next-big"></span><span>Продукция</span>
</p>
<div class="item__menu-wrap container" id="popUpMenuWrap">
<div class="item__menu-flex">
';
}
function itemMenuThree()
{
    print
        '
    </div>
        <div class="important__wrap">
            <div class="important__top">
                <h3>Это важно</h3>
                <div class="important-exit icon-close"></div>
            </div>
            <a href="#!" target="_blank">
                <div class="important__image"><img src="./img/header/card.jpg" alt="Карточка"></div>
                <div class="important__info">
                    <h4>Ультралейбл на выставке интерткань 22</h4>
                    <p>3 дня демонстрируем наши товары и даеминдивидуальные
                        консультации каждому гостю</p>
                </div>
            </a>
        </div>
    </div>
    <div class="item__subinfo-wrap">
        <p class="item__subinfo-request"><span>Запрос по
                продукции</span><span class="icon-link"></span></p>
        <p class="item__subinfo-message"><span>Написать
                директору</span><span class="icon-link"></span></p>
        <p class="item__subinfo-subscription">
            <span class="item__subinfo-desk">Подписаться на новости и
                акций</span>
            <span class="item__subinfo-mobile">Подписаться на новости</span>
            <span class="icon-link"></span>
        </p>
        <p class="item__subinfo-review">
            <span class="item__subinfo-desk">Оставаить отзыв о
                компании</span>
            <span class="item__subinfo-mobile">Оставаить отзыв</span>
            <span class="icon-link"></span>
        </p>
    </div>
    </div>
    ';
}
?>