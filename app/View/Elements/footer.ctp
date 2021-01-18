<footer>
    <div class="container">
        <div class="footer_top">
            <a class="foot_logo" href="/">
                <div class="logo"></div>
            </a>
            <div class="share_block">
                <div class="share_text"><?=__('Поделиться в соц. сетях:')?></div>
                <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                <script src="https://yastatic.net/share2/share.js"></script>
                <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,whatsapp,telegram"></div>
            </div>
        </div>
        <div class="foot_menu">
            <ul class="menu">
                <li><a class="menu_link active" href="/"><?=__('Главная')?></a></li>
                <li class="sub_menu_link">
                    <a class="menu_link" href="javascript:;"><?=__('О нас')?></a>
                    <div class="sub_menu">
                        <div class="sub_menu_list">
                            <a class="sub_link" href="/<?=$lang?>abouts"><?=__('История Центра')?></a>
                            <a class="sub_link" href="/<?=$lang?>page/ustav-kompanii"><?=__('Устав')?></a>
                            <a class="sub_link" href="/<?=$lang?>page/struktura"><?=__('Структура')?></a>
                        </div>
                    </div>
                </li>
                <li class="sub_menu_link">
                    <a class="menu_link" href="javascript:;"><?=__('Деятельность')?></a>
                    <div class="sub_menu">
                        <div class="sub_menu_list">
                            <a class="sub_link" href="/<?=$lang?>expertises"><?=__('Виды проводимых экспертиз')?></a>
                            <a class="sub_link" href="/<?=$lang?>planjobs"><?=__('План работы')?></a>
                            <a class="sub_link" href="/<?=$lang?>npas"><?=__('База НПА')?></a>
                            <a class="sub_link" href="/<?=$lang?>npaprojects"><?=__('Проекты НПА')?></a>
                            <a class="sub_link" href="/<?=$lang?>activities"><?=__('Научная деятельность')?></a>
                            <a class="sub_link" href="/<?=$lang?>page/standartizatsiya-sertifikatov"><?=__('Аккредитация институтов')?></a>
                            <a class="sub_link" href="/<?=$lang?>statistics"><?=__('Аналитика и статистика')?></a>
                            <a class="sub_link" href="/<?=$lang?>stateprocurements"><?=__('Государственные закупки')?></a>
                            <a class="sub_link" href="/<?=$lang?>vacancies"><?=__('Вакансии')?></a>
                        </div>
                    </div>
                </li>
                <li class="sub_menu_link">
                    <a class="menu_link" href="javascript:;"><?=__('Гражданам')?></a>
                    <div class="sub_menu">
                        <div class="sub_menu_list">
                            <a class="sub_link" href="/<?=$lang?>page/grafik-priem-grazhdan-fizicheskikh-i-yuridicheskikh-lits-rukovodstvom-tsentra-sudebnykh-ekspertiz-ministerstva-yustitsii-rk"><?=__('График приема граждан')?></a>
                            <a class="sub_link" href="/<?=$lang?>page/platnye-uslugi-tsentra-sudebnykh-ekspertiz"><?=__('Платные услуги')?></a>
                            <a class="sub_link" href="/<?=$lang?>gosservices"><?=__('Государственные услуги')?></a>
                            <a class="sub_link" href="/<?=$lang?>faqs"><?=__('Часто задаваемые вопросы')?></a>
                        </div>
                    </div>
                </li>
                <li><a class="menu_link" href="/<?=$lang?>page/proekt-vsemirnogo-banka"><?=__('Проект Всемирного Банка')?></a></li>
                <li><a class="menu_link" href="/<?=$lang?>page/mezhdunarodnoe-sotrudnichestvo"><?=__('Международное сотрудничество')?></a></li>
                <li><a class="menu_link" href="/<?=$lang?>news"><?=__('Новости')?></a></li>
                <li><a class="menu_link" href="/<?=$lang?>page/kontakty"><?=__('Контакты')?></a></li>
            </ul>
        </div>
        <div class="foot_bottom">
            <div class="copyright">© 2020 <?=__('Центр судебных экспертиз')?></div>
            <div class="created"><?=__('Разработка сайта')?> <a href="https://astanacreative.kz/" target="_blank">AstanaCreative</a></div>
        </div>
    </div>
</footer>