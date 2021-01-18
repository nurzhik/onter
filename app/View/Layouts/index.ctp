<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>ONTER.kz</title>
        <meta name="description" content=""/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="img/favicon.png" />
        <link rel="stylesheet" href="/css/style.css?v=1.11" />
        <link rel="stylesheet" href="/css/slick.css" />
        <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css" />
        <link rel="stylesheet" href="/css/jquery.fancybox.css" />
    </head>
    <body class="<?=$l?>">
    <div class="popup" id="alert_popup">
        <div class="alert <?=(isset($_SESSION['Message'])) ? 'alert--active' : '';?>">
            <div class="container">
                <?php //var_dump($_SESSION); ?>
                <?php echo $this->Session->flash('good'); ?>
                <?php echo $this->Session->flash('bad'); ?>
                <?php if(isset($_SESSION['Message'])){unset($_SESSION['Message']);} ?>
                <div class="my-alert__close"></div>
            </div>
        </div> 
    </div>
    <header>
        <div class="header_top <?= ($this->request->params['action'] == 'login') ? 'main_header' : ''?>">
            <div class="container">
                <div class="logo_block">
                    <a class="logo" href="index.html"></a>
                    <div class="lang_block">
                        <a class="lang_choice" href="javascript:;">
                            <span>RU</span>
                       </a>
                        <div class="other_lang">
                            <a href="javascript:;" class="lang">kz</a>
                            <a href="javascript:;" class="lang active">ru</a>
                            <a href="javascript:;" class="lang">en</a>
                        </div>
                    </div>
                </div>
                <ul class="menu">
                    <li><a class="menu_link" href="faq.html">Вопросы и ответы</a></li>
                    <li><a class="menu_link" href="news.html">Полезные статьи</a></li>
                    <li><a class="menu_link" href="partners.html">Партнерам</a></li>
                </ul>
                <div class="head_right">
                    <div class="login_buttons">
                        <?php if($login): ?>
                            <a class="login_btn" href="/users/logout">Выйти</a>
                            <?php if($login['role'] == 'user'): ?>
                            <a class="login_btn active" href="/<?=$lang?>users/cabinet">
                            Личный кабинет</a>
                            <?php else: ?>
                            <a class="login_btn active" href="/<?=$lang?>users/doccabinet">
                            Личный кабинет</a>
                            <?php   endif ?>
                        <?php else: ?>
                            <a class="login_btn" href="/<?=$lang?>users/login">Войти</a>
                            <a class="login_btn active" href="/<?=$lang?>registration_page">Регистрация</a>
                        <?php endif ?>
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
        </div>
    </header>

   

    <?php echo $this->fetch('content'); ?>

    <footer>
        <div class="container">
            <a class="logo foor_logo" href="javascript:;"></a>
            <ul class="foot_menu">
                <li><a class="menu_link" href="about.html">О проекте</a></li>
                <li><a class="menu_link" href="faq.html">Вопросы и ответы</a></li>
                <li><a class="menu_link" href="news.html">Полезные статьи</a></li>
                <li><a class="menu_link" href="partners.html">Партнерам</a></li>
                <li><a class="menu_link" href="registration.html">Регистрация</a></li>
            </ul>
            <ul class="soc_list">
                <li><a class="soc_link instagram" href="javascript:;" target="_blank"></a></li>
                <li><a class="soc_link facebook" href="javascript:;" target="_blank"></a></li>
                <li><a class="soc_link youtube" href="javascript:;" target="_blank"></a></li>
            </ul>
        </div>
    </footer>

        <script src="/js/jquery-3.0.0.min.js"></script>
        <script src="/js/slick.min.js"></script> 
        <script src="/js/waypoint.js"></script>  
        <script src="/js/jquery.maskedinput.min.js"></script>
        <script src="/js/jquery.datetimepicker.full.min.js"></script>
        <script src="/js/script.js?v=1.11"></script> 
        <script src="/js/jquery.fancybox.min.js"></script>   
    </body>
</html>