<section class="page breadcrumbs_section">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="/<?=$lang?>"><?=__('Главная')?></a></li>
                    <li><a><?=__('Новости')?></a></li>
                </ul>
                <div class="title title_left"><?=__('Новости')?></div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="news_cat">
                    <a class="news_cat_item active" href="/<?=$lang?>news"><?=__('Новости')?></a>
                    <a class="news_cat_item" href="/<?=$lang?>smi"><?=__('СМИ о нас')?></a>
                </div>
                <div class="news">
                    <?php foreach ($data as $item):?>
                        <div class="news_item">
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
                <?php if($data): ?>
                    <div class="pagination">
                        <?php if($paginator['start']): ?>
                            <a href="<?=$paginator['link']?>1" class="p_start pag_btn "> << </a>
                        <?php endif ?>

                        <?php if($paginator['prev']): ?>
                            <a href="<?=$paginator['link']?><?=$paginator['prev']?>" class="p_prev pag_btn"> < </a>
                        <?php endif ?>
                        <span class="p_pages"><?=__('Страница')?> <?=$paginator['current_page']?> <?=__('из')?> <?=$paginator['count_pages']?></span>
                        <?php if($paginator['next']): ?>
                            <a href="<?=$paginator['link']?><?=$paginator['next']?>" class="p_next pag_btn"> > </a>
                        <?php endif ?>

                        <?php if($paginator['end']): ?>
                            <a href="<?=$paginator['link']?><?=$paginator['count_pages']?>" class="p_end pag_btn "> >> </a>
                        <?php endif ?>
                    </div>
                <?php endif ?>
                <div class="pagination">
                    <a class="pag pag_btn pag_prev" href="javascript:;"></a>
                    <a class="pag active" href="javascript:;">1</a>
                    <a class="pag" href="javascript:;">2</a>
                    <a class="pag" href="javascript:;">3</a>
                    <a class="pag pag_btn pag_next" href="javascript:;"></a>
                </div>
            </div>
        </section>

        <section class="pressa_section">
            <div class="container">
                <div class="pressa">
                    <div class="double_title">
                        <div class="title"><?=__('Контакты Пресс-службы')?></div>
                    </div>
                    <div class="pressa_contact">
                        <div class="contact_item">
                            <div class="contact_name">E-mail:</div>
                            <a class="left_icon mail" href="mailto:info@zhkh.kz">info@zhkh.kz</a>
                        </div>
                        <div class="contact_item">
                            <div class="contact_name"><?=__('Приемная')?>:</div>
                            <a class="left_icon tel" href="tel:+77172999471">+7 7172 999 471</a>
                        </div>
                    </div>
                    <div class="text_item">
                        <p><?=__('Для получения более подробной информации по работе пресс-службы обращайтесь по выше указанным контактам')?></p>
                    </div>
                </div>
            </div>
        </section>