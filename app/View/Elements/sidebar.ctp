<div class="page_sidebar">
        <div class="title"><?=__('Новости')?></div>
        <div class="news">
        	<?php foreach($sidebar as $item): ?>
                <div class="news_item">
	                <a class="news_img" href="/<?=$lang?>news/view/<?=$item['News']['id']?>">
	                    <img src="/img/news/<?=$item['News']['img']?>" alt="">
	                </a>
	                <div class="about_news">
	                    <div class="news_date"><?php echo $this->Time->format($item['News']['date'], '%d.%m.%Y', 'invalid'); ?></div>
	                    <a class="news_name" href="/<?=$lang?>news/view/<?=$item['News']['id']?>"><?php echo $item['News']['title']; ?></a>
	                    <div class="news_text text_item">
	                    	<?= $this->Text->truncate(strip_tags($item['News']['body']), 100, array('ellipsis' => '...', 'exact' => true)) ?>
	                    	</div>
	                </div>
	            </div>
            <?php endforeach ?>
            
          
        </div>
    </div>