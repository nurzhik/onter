<div class="about_partners">
	<div class="title title_left"><?=__('Полезные ссылки')?></div>
	<div class="partner_list">
		<?php foreach($partners as $item): ?>
			<div>
        		<a class="partner" href="<?=$item['Partner']['link']?>" target="_blank">
					<div class="partner_img">
						<img src="/img/partners/<?=$item['Partner']['img']?>">
					</div>	
					<span class="partner__heading">
						<?=$item['Partner']['title']?>
					</span>
				</a>
			</div>
        <?php endforeach ?>
	</div>
</div>