<section class="page news_inner_bg">
    <img src="/img/news_inner_bg.jpg" alt="">
</section>

<section class="gray">
    <div class="container">
        <div class="news_inner">
            <div class="news_content">
                <div class="news_inner_head">
                    <div class="news_head_left">
                        <div class="news_date">
                        <?=__('Новости')?>
                        </div>
                        <div class="title"><?=$data['News']['title']?></div>
                        <div class="text_item">
                            <?=$data['News']['short_desc']?>
                        </div>
                    </div>
                    <div class="news_head_right">
                        <div class="news_inner_date">
                            <div><?php echo $this->Time->format($data['News']['date'], '%d', 'invalid'); ?></div>
                            <span><?=$this->Common->beauty_date($data['News']['date']);?> </span>
                        </div>
                        <div class="news_share">
                            <a class="news_share_link share_wp" href="javascript:;" rel="nofollow noopener" target="_blank" title="WhatsApp">WhatsApp</a>
                            <a class="news_share_link share_vk" href="javascript:;" rel="nofollow noopener" target="_blank" title="Vkontakte">Vkontakte</a>
                            <a class="news_share_link share_fb" href="javascript:;" rel="nofollow noopener" target="_blank" title="Facebook">Facebook</a>

                            <script src="https://yastatic.net/share2/share.js"></script>
                            <div class="ya-share2" data-curtain data-services="vkontakte,facebook,whatsapp"></div>
                        </div>
                    </div>
                </div>
                <div class="inner_img">
                    <img src="/img/news/<?=$data['News']['img']?>" alt="">
                </div>
                <div class="text_item">
                    <?=$data['News']['body']?>
                </div>
            </div>
            <div class="news_sidebar">
                <div class="sidebar_news_list">
                    <?php foreach ($other_news as $item):?>
                        <div class="news_item">
                          <a class="news_img" href="/<?=$lang?>news/view/<?=$item['News']['id']?>">
                            <img src="/img/news/<?=$item['News']['img']?>" alt="">
                          </a>
                          <div class="news_text">
                            <div class="news_date"><?php echo $this->Time->format($item['News']['date'], '%d.%m.%Y', 'invalid'); ?> 
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
        </div>
    </div>
</section>