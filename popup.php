<!-- окна старт-->
<div class="popup-wrapper">
    <div class="authorization__wrapper">
        <div class="authorization__wrap authorization__login-wrap">
            <div class="authorization__top">
                <div class="authorization-login">Вход</div>
                <div class="authorization-register">Регистрация</div>
                <div class="authorization-exit icon-close"></div>
            </div>
            <div class="login-main">
                <form class="login__form" action="#" method="post">
                    <input type="email" name="login__email" placeholder="*E-mail" required>
                    <input type="password" name="login__pass" placeholder="*Пароль" required>
                    <button type="submit" name="login__button">Войти</button>
                </form>
                <p class="authorization__subinfo authorization__recovery-subinfo"><span>Восстановить
                        пароль</span><span class="icon-link"></span></p>
            </div>
        </div>
        <div class="authorization__wrap authorization__register-wrap">
            <div class="register-main">
                <div class="authorization__top">
                    <div class="authorization-login">Вход</div>
                    <div class="authorization-register">Регистрация</div>
                    <div class="authorization-exit icon-close"></div>
                </div>
                <form class="register__form" action="#" method="post">
                    <div class="register__form-row">
                        <input type="text" name="register__name" placeholder="*Имя" required>
                        <input type="text" name="register__family" placeholder="*Фамилия" required>
                        <input type="email" name="register__email" placeholder="*E-mail" required>
                    </div>
                    <div class="register__form-row">
                        <input type="tel" name="register__tel" placeholder="*Контактный телефон" required>
                        <input type="password" name="register__pass" placeholder="*Пароль" required>
                        <input type="password" name="register__pass" placeholder="*Повтор пароля" required>
                    </div>
                    <div class="register__form-bottom">
                        <button type="submit" name="register__button">Зарегистрироваться</button>
                        <p class="authorization__subinfo authorization__login-subinfo"><span>Уже есть
                                аккаунт</span><span class="icon-link"></span></p>
                    </div>
                </form>
            </div>
        </div>
        <div class="authorization__wrap authorization__recovery-wrap">
            <div class="authorization__top">
                <div class="authorization-login">Вход</div>
                <div class="authorization-register">Регистрация</div>
                <div class="authorization-exit icon-close"></div>
            </div>
            <div class="recovery-main">
                <form class="recovery__form" action="#" method="post">
                    <input type="email" name="recovery__email" placeholder="*E-mail" required>
                    <button type="submit" name="recovery__button">Отправить код</button>
                    <p class="authorization__subinfo authorization__register-subinfo recovery__register-subinfo">
                        <span>Зарегистрироваться</span><span class="icon-link"></span>
                    </p>
                    <p class="authorization__subinfo authorization__login-subinfo"><span>Войти
                            повторно</span><span class="icon-link"></span></p>
                </form>
            </div>
        </div>
    </div>
    <div class="popup__wrapper">
        <form class="popup__wrap request__wrap" action="#" method="post">
            <div class="popup__top request__top">
                <h3>запрос по продукции</h3>
                <div class="popup__exit icon-close request__exit icon-close"></div>
            </div>
            <div class="popup__form request__form">
                <div class="popup__form-row request__form-row">
                    <input type="text" name="name" placeholder="*Имя" required>
                    <input type="text" name="family" placeholder="*Фамилия" required>
                    <input type="tel" name="tel" placeholder="*Номер телефона" required>
                </div>
                <input type="text" placeholder="*Тема сообщения" required>
                <textarea name="request__text" cols="30" rows="7" placeholder="*Текст сообщения" required></textarea>
            </div>
            <div class="popup__file-wrap request__file-wrap">
                <input name="file" id="request__file" type="file" class="input__file" multiple>
                <label for="request__file" class="popup__file-button">
                    <span class="popup__file-button-text">Добавить файл</span>
                    <span class="popup__file-icon icon-add"></span>
                </label>
                <button>Отправить</button>
            </div>
        </form>
        <form class="popup__wrap message__wrap" action="#" method="post">
            <div class="popup__top message__top">
                <h3>Отправить сообщение директору</h3>
                <div class="popup__exit icon-close message__exit icon-close"></div>
            </div>
            <div class="popup__form message__form">
                <div class="popup__form-row message__form-row">
                    <input type="text" name="name" placeholder="*Имя" required>
                    <input type="text" name="family" placeholder="*Фамилия" required>
                    <input type="tel" name="tel" placeholder="*Номер телефона" required>
                </div>
                <input type="text" placeholder="*Тема сообщения" required>
                <textarea name="message__text" cols="30" rows="7" placeholder="Текст сообщения"></textarea>
            </div>
            <div class="popup__file-wrap message__file-wrap">
                <input name="file" type="file" id="message__form" class="input__file" multiple>
                <label for="message__form" class="popup__file-button">
                    <span class="popup__file-button-text">Добавить файл</span>
                    <span class="popup__file-icon icon-add"></span>
                </label>
                <button>Отправить</button>
            </div>
        </form>
        <form class="popup__wrap review__wrap" action="#" method="post">
            <div class="popup__top review__top">
                <div class="popup__top-title">
                    <h3>Оставить отзыв</h3>
                    <p>Ваш отзыв очень важен для нас. Спасибо, что делитесь опытом!</p>
                </div>
                <div class="popup__exit icon-close review__exit icon-close"></div>
            </div>
            <div class="popup__form review__form">
                <div class="popup__form-row review__form-row">
                    <input type="text" name="name" placeholder="*Имя" required>
                    <input type="text" name="family" placeholder="*Фамилия" required>
                    <input type="tel" name="tel" placeholder="*Контактный номер" required>
                </div>
                <div class="popup__rating-wrap review__rating-wrap">
                    <div class="popup__rating review__rating">
                        <p>Работа менеджера</p>
                        <span class="rating"></span>
                    </div>
                    <div class="popup__rating review__rating">
                        <p>Скорость сбора заказа</p>
                        <span class="rating"></span>
                    </div>
                    <div class="popup__rating review__rating">
                        <p>Качество продукции</p>
                        <span class="rating"></span>
                    </div>
                </div>
                <textarea name="review__text" cols="30" rows="7" placeholder="Текст отзыва и Ваши пожелания"></textarea>
            </div>
            <div class="popup__file-wrap review__file-wrap">
                <input name="file" type="file" id="review__file" class="input__file" multiple>
                <label for="review__file" class="popup__file-button">
                    <span class="popup__file-button-text">Добавить файл</span>
                    <span class="popup__file-icon icon-add"></span>
                </label>
                <button>Отправить</button>
            </div>
        </form>
        <form class="popup__wrap subscription__wrap" action="#!">
            <div class="popup__top subscription__top">
                <h3>Подписка на новости</h3>
                <div class="popup__exit icon-close subscription__exit icon-close"></div>
            </div>
            <div class="popup__main subscription__main-container">
                <p>Получайте первыми
                    эксклюзивные предложения
                    и новости в нашей рассылке</p>
                <div class="subscription__main">
                    <input type="email" name="subscription__email" placeholder="*E-mail" required>
                    <button>Подписаться</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- окна конец -->