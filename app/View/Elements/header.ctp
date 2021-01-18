<header>
    <div class="header_fixed">
        <div class="container">
            <div class="header_top">
                <a class="logo" href="/"></a>
                <form class="search_block" action="/<?=$lang?>search">
                    <input class="search_input" type="search" name="q" placeholder="<?=__('Поиск по сайту')?>...">
                    <button class="search_btn" type="submit"></button>
                </form>
                <div class="head_right">
                    <a class="search_show" href="javascript:;"></a>

                    <div class="spec_block">
                        <a class="eye_btn" href="javascript:;"><?=__('Версия для слабовидящих')?></a>
                        <div class="spec_block_list">
                            <div class="size_block">
                                <div class="size_text"><?=__('Размер шрифта')?>:</div>
                                <div class="size_list">
                                    <div class="size_list_item size_small">A</div>
                                    <div class="size_list_item size_middle active">A</div>
                                    <div class="size_list_item size_big">A</div>
                                </div>
                            </div>
                            <div class="size_block">
                                <div class="size_text"><?=__('Изображения')?>:</div>
                                <div class="image_check">X</div>
                            </div>
                            <a class="normal_view" href="javascript:;"><?=__('Обычная версия сайта')?></a>
                        </div>
                    </div>

                    <div class="lang_block">
                        <div class="lang_choice"><?=$l?></div>
                        <div class="other_lang">
                        <a class="lang <?=($l == 'ru') ? 'active' : ''?>" href="/">ru</a>
                            <a class="lang <?=($l == 'kz') ? 'active' : ''?>" href="/kz">kz</a>
                            <a class="lang <?=($l == 'en') ? 'active' : ''?>" href="/en">en</a>
                            
                        </div>
                    </div>
                    <div class="mob_menu">
                   <span class="menu_btn">
                      <span class="menu_btn_span menu1"></span>
                      <span class="menu_btn_span menu2"></span>
                      <span class="menu_btn_span menu3"></span>
                   </span>
                </div>
                <div class="under_nav"></div>
                </div>
            </div>
            <div class="header_bottom">
                <ul class="menu">
                    <li><a class="menu_link active" href="/<?=$lang?>"><?=__('Главная')?></a></li>
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
        </div>
    </div>
</header>