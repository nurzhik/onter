<section class="main_section page">
      <div class="main_slider_block">
        <div class="main_slider">
          <?php foreach ($slides as $item): ?>
            <div>
              <div class="slide" style="background-image: url('/img/slides/<?=$item['Slide']['img']?>');">
                <div class="slide_text">
                  <div class="slide_title"><?=$item['Slide']['title']?></div>
                  <div class="text_item">
                    <?= $this->Text->truncate(strip_tags($item['Slide']['body']), 100, array('ellipsis' => '...', 'exact' => true)) ?>
                  </div>
                  <a class="more_btn green_btn" href="/<?=$lang?><?=$item['Slide']['link']?>"><?=__('Подробнее')?></a>
                </div>
              </div>
            </div>
          <?php endforeach ?>
          
        </div>
        <div class="main_slide_control">
          <div class="main_arrow"></div>
        </div>
      </div>
      <div class="main_links">
        <a class="main_link_item" href="/<?=$lang?>ksk_to_axis#osi_info">
          <div class="main_link_img">
            <img src="img/main_link_1.png" alt="">
          </div>
          <div class="main_link_name"><?=__('Инфографики')?></div>
        </a>
        <a class="main_link_item" href="/<?=$lang?>ksk_to_axis#osi_video">
          <div class="main_link_img">
            <img src="img/main_link_2.jpg" alt="">
          </div>
          <div class="main_link_name"><?=__('Видеоролики')?></div>
          <div class="text_item">
            <p><?=__('Cерия полезных видеороликов для собственников жилья и управляющих компаний')?></p>
          </div>
        </a>
        <a class="main_link_item" href="/<?=$lang?>ksk_to_axis#osi_docs">
          <div class="main_link_img">
            <img src="img/main_link_3.jpg" alt="">
          </div>
          <div class="main_link_name"><?=__('НПА')?></div>
          <div class="text_item">
            <p><?=__('База нормативно-правовых актов')?></p>
          </div>
        </a>
        <a class="main_link_item" href="/<?=$lang?>ksk_to_axis#osi_map">
          <div class="main_link_img">
            <img src="img/main_link_4.png" alt="">
          </div>
          <div class="main_link_name"><?=__('Карта ОСИ')?></div>
          <div class="text_item">
            <p><?=__('Ознакомьтесь с картой распространения ОСИ')?></p>
          </div>
        </a>
      </div>
    </section>

    <section class="light_blue">
      <div class="container">
        <div class="title"><?=__('Карта ОСИ')?></div>

         <?=$this->element('maps') ?>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="title_btn">
          <div class="title"><?=__('Новости')?></div>
          <a class="more_btn green_btn" href="/<?=$lang?>news"><?=__('Все новости')?></a>
        </div>
        <div class="news main_news">
          <?php foreach ($news as $item):?>
            <div class="news_item">
              <div class="news_type"><?=__('Новости')?></div>
              <a class="news_img" href="/<?=$lang?>news/view/<?=$item['News']['id']?>">
                <img src="/img/news/<?=$item['News']['img']?>" alt="">
              </a>
              <div class="news_text">
                <div class="news_date"><?php echo $this->Time->format($item['News']['date'], '%d.%m.%Y', 'invalid'); ?> 

              <!-- <?=$this->Common->beauty_date($item['News']['date']);?> -->
                
              </div>
                <a class="news_name" href="/<?=$lang?>news/view/<?=$item['News']['id']?>"><?php echo $item['News']['title']; ?></a>
                <div class="text_item">
                  <?= $this->Text->truncate(strip_tags($item['News']['body']), 100, array('ellipsis' => '...', 'exact' => true)) ?>
                </div>
                <a class="news_more" href="/<?=$lang?>news/view/<?=$item['News']['id']?>"><?=__('Читать новость целиком')?></a>
              </div>
            </div>
          <?php endforeach ?>
          <?php foreach ($smi as $item):?>
            <div class="news_item">
              <div class="news_type"><?=__('Сми о нас')?></div>
              <a class="news_img" href="/<?=$lang?>news/view/<?=$item['News']['id']?>">
                <img src="/img/news/<?=$item['News']['img']?>" alt="">
              </a>
              <div class="news_text">
                <div class="news_date"><?php echo $this->Time->format($item['News']['date'], '%d.%m.%Y', 'invalid'); ?> 

              <!-- <?=$this->Common->beauty_date($item['News']['date']);?> -->
                
              </div>
                <a class="news_name" href="/<?=$lang?>news/view/<?=$item['News']['id']?>"><?php echo $item['News']['title']; ?></a>
                <div class="text_item">
                  <?= $this->Text->truncate(strip_tags($item['News']['body']), 100, array('ellipsis' => '...', 'exact' => true)) ?>
                </div>
                <a class="news_more" href="/<?=$lang?>news/view/<?=$item['News']['id']?>"><?=__('Читать новость целиком')?></a>
              </div>
            </div>
          <?php endforeach ?>
          
        </div>
      </div>
    </section>

    <section class="light_blue">
      <div class="container">
        <div class="title"> <?=__('Проекты')?></div>
        <div class="project_slider">
          <?php foreach ($projects as $item):?>
            <div>
              <a class="project_slide" href="/<?=$lang?>projects">
                <img src="/img/projects/<?=$item['Project']['img']?>" alt="">
              </a>
            </div>
          <?php endforeach ?>
         
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="title"> <?=__('О компании')?></div>
        <div class="about">
          <div class="about_text">
            <div class="about_title"><?=$params['about_title']?></div>
            <div class="text_item">
              <?=$params['about_text']?>
            </div>
            <a class="more_btn green_btn" href="/<?=$lang?>about">Подробнее</a>
          </div>
          <div class="about_img">
            <img class="about_main_img" src="/img/settings/<?=$params['img']?>" alt="">
            
          </div>
        </div>
      </div>
    </section>

    <section class="light_blue">
      <div class="container">
        <div class="title"> <?=__('Дочерние организации')?></div>
        <div class="filial_list">
          <?php foreach ($branches as $item):?>
            <a class="filial_list_item" href="/<?=$lang?>branches">
              <img src="/img/branches/<?=$item['Branche']['img']?>" alt="">
            </a>
          <?php endforeach ?>
          
         
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="title"> <?=__('Полезные ссылки')?></div>
        <div class="link_slider">
          <?php foreach ($partners as $item):?>
            <div>
              <a class="project_slide" href="<?=$item['Partner']['link']?>" target="_blank">
                <img src="/img/partners/<?=$item['Partner']['img']?>" alt="">
              </a>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </section>