<section class="main_section" style="background-image: url('img/main_bg.jpg');">
  <div class="container">
    <div class="main_block">
      <div class="main_search_block">
        <div class="main_title">Получите онлайн консультацию не выходя из дома</div>
        <div class="text_item">
          <p>Введите Ваши симптомы и мы определим возможное заболевание</p>
        </div>
        <form class="search_block" action="" method="">
          <input class="search_input" type="text" name="" placeholder="Что вас беспокоит?">
          <button class="search_btn" type="submit"></button>
        </form>
      </div>

      <div class="search_request">
        <div class="text_item">
          <p>Популярные запросы:</p>
        </div>
        <div class="search_request_list">
          <?php foreach ($symptoms as $item): ?>
              <a class="search_item" href="/search?symptom=<?=$item['Symptom']['id']?>"><?=$item['Symptom']['title_'.$l]?></a>
          <?php endforeach ?>
          
          
        </div>
      </div>
    </div>
  </div>
</section>

<section class="gray">
  <div class="container">
    <div class="title">Простой и удобный процесс</div>
    <div class="title_text">Мы постарались сделать процесс получения консультации удобным для Вас</div>
    <div class="process_list">
      <div class="process_item way">
        <div class="process_img">
          <img src="img/proc_1.svg" alt="">
        </div>
        <div class="process_name">Опишите проблему</div>
        <div class="process_text">Расскажите что вас беспокоит, опишите свои симптомы</div>
      </div>
      <div class="process_line way"></div>
      <div class="process_item way">
        <div class="process_img">
          <img src="img/proc_2.svg" alt="">
        </div>
        <div class="process_name">Найдите нужного врача</div>
        <div class="process_text">Выберите нужного врача на основании наших рекомендаций</div>
      </div>
      <div class="process_line way"></div>
      <div class="process_item way">
        <div class="process_img">
          <img src="img/proc_3.svg" alt="">
        </div>
        <div class="process_name">Получите онлайн консультацию</div>
        <div class="process_text">Получите консультацию врача, который поможет вам справиться с недугом</div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="title">Выберите тему</div>

    <div class="theme_slider">
      <div>
        <a class="theme_item" href="javascript:;">
          <div class="theme_img">
            <img src="img/theme_1.svg" alt="">
          </div>
          <div class="theme_name">Боль в горле</div>
        </a>
      </div>
      <div>
        <a class="theme_item" href="javascript:;">
          <div class="theme_img">
            <img src="img/theme_2.svg" alt="">
          </div>
          <div class="theme_name">Кашель</div>
        </a>
      </div>
      <div>
        <a class="theme_item" href="javascript:;">
          <div class="theme_img">
            <img src="img/theme_3.svg" alt="">
          </div>
          <div class="theme_name">Коронавирус</div>
        </a>
      </div>
      <div>
        <a class="theme_item" href="javascript:;">
          <div class="theme_img">
            <img src="img/theme_4.svg" alt="">
          </div>
          <div class="theme_name">Головная боль</div>
        </a>
      </div>
      <div>
        <a class="theme_item" href="javascript:;">
          <div class="theme_img">
            <img src="img/theme_5.svg" alt="">
          </div>
          <div class="theme_name">Температура</div>
        </a>
      </div>
      <div>
        <a class="theme_item" href="javascript:;">
          <div class="theme_img">
            <img src="img/theme_6.svg" alt="">
          </div>
          <div class="theme_name">Аллергия</div>
        </a>
      </div>
      <div>
        <a class="theme_item" href="javascript:;">
          <div class="theme_img">
            <img src="img/theme_3.svg" alt="">
          </div>
          <div class="theme_name">Коронавирус</div>
        </a>
      </div>
      <div>
        <a class="theme_item" href="javascript:;">
          <div class="theme_img">
            <img src="img/theme_4.svg" alt="">
          </div>
          <div class="theme_name">Головная боль</div>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="gray">
  <div class="container">
    <div class="title">Поделиться в социальных сетях</div>
    <div class="page_share">
      <div class="share_list">
        <a class="share_link telegram_share" href="javascript:;" rel="nofollow noopener" target="_blank" title="Telegram">
          <div class="share_img">
            <img src="img/telegram.svg" alt="">
          </div>
          <div class="share_text">Telegram</div>
        </a>
        <a class="share_link wp_share" href="javascript:;" rel="nofollow noopener" target="_blank" title="WhatsApp">
          <div class="share_img">
            <img src="img/whatsapp.svg" alt="">
          </div>
          <div class="share_text">WhatsApp</div>
        </a>
        <a class="share_link vk_share" href="javascript:;" rel="nofollow noopener" target="_blank" title="ВКонтакте">
          <div class="share_img">
            <img src="img/vk.svg" alt="">
          </div>
          <div class="share_text">VKontakte</div>
        </a>
        <a class="share_link facebook_share" href="javascript:;" rel="nofollow noopener" target="_blank" title="Facebook">
          <div class="share_img">
            <img src="img/facebook_white.svg" alt="">
          </div>
          <div class="share_text">Facebook</div>
        </a>
      </div>
      <script src="https://yastatic.net/share2/share.js"></script>
      <div class="ya-share2" data-curtain data-services="vkontakte,facebook,telegram,whatsapp"></div>
    </div>
  </div>
</section>