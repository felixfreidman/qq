<footer class="footer" id="toFooter">
    <div class="footer-row footer-row--expanded">
        <div class="logo-container"><a href="#toMain"> <img class="logo" id="toMain"
                    src="<?php echo get_template_directory_uri() . '/assets/images/content/main_logo.svg' ?>"
                    alt="Company Logo"></a><span class="logo-caption">Кукушка</span></div>
        <div class="mobile-container mobile-container--second-to-column">
            <div class="navigation"><a class="navigation-link" href="#toGreeting">О системе</a><a
                    class="navigation-link" href="#toBenefits">Как работает</a><a class="navigation-link"
                    href="">Возможности</a><a class="navigation-link" href="#toFooter">Помощь</a></div>
            <div class="mobile-container mobile-container--first-to-column">
                <div class="contacts"> <a
                        href="tel:<?php echo get_field("phone_num", 'option'); ?>"><?php echo get_field("phone_num", 'option'); ?></a>
                </div>
                <div class="apply">
                    <div class="apply-btn apply-btn--footer">ПОЛУЧИТЬ ДЕМО-ДОСТУП</div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-row">
        <div class="company-info"><span class="company-name">©2019–2021 Кукушка</span><span
                class="company-privacy">Политика конфиденциальности</span></div>
        <div class="developer-info">Сделано в Студии Юрина</div>
    </div>
</footer>

<div class="dark-layer js--hidden">
    <form class="apply-form" id="applyForm" method="POST">
        <div class="form-close" id="closeForm"><span class="cross-one"> </span><span class="cross-two"></span></div>
        <div class="form-header">Оставить заявку</div>
        <div class="form-subheader">Начните автоматизацию прямо сейчас. Оставьте заявку и получите бесплатный
            демо-доступ к Кукушке</div>
        <label for="userName">
            <input class="form-input" id="userName" type="text" name="userName" placeholder="ФИО" required
                pattern="[a-zA-Z]*">
        </label>
        <label for="userPhone">
            <input class="form-input" id="userPhone" type="tel" name="userPhone" placeholder="Телефон" required
                data-inputmask="'mask' : '+7(999) 999-99-99'" inputmode="text">
        </label>
        <label for="userCompany">
            <input class="form-input" id="userCompany" type="text" name="userCompany" placeholder="Название компании"
                required pattern="[a-zA-Z]*"></label>
        <label for="userArea">
            <input class="form-input" id="userArea" type="text" name="userArea" placeholder="Область деятельности"
                required pattern="[a-zA-Z]*">
        </label>
        <button class="form-button" type="submit">Отправить</button>
        <div class="form-caption">Нажимая на кнопку “отправить”, вы даете согласие на обработку персональных данных
        </div>
    </form>

</div>

<script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.min.js' ?>"> </script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/plugins.min.js' ?>"> </script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/main.min.js' ?>"> </script>
</body>

</html>