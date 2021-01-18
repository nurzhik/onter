<section class="page breadcrumbs_section">
	<div class="container">
		<ul class="breadcrumbs">
            <li><a href="/<?=$lang?>"> <?=__('Главная')?></a></li>
            <li><a><?=__('Переход из кск в оси')?></a> </a></li>
        </ul>
        <div class="title title_left"><?=$page['Page']['title']?></div>
	</div>
</section>

<section>
	<div class="container">
		<div class="about about_osi">
			<div class="about_text">
				<div class="text_item">
					<?=$page['Page']['body']?>
				</div>
			</div>
			<div class="about_img">
				<img class="about_main_img" src="/img/pages/<?=$page['Page']['img']?>" alt="">
			</div>
		</div>
		<div id="osi_map"></div>
	</div>
</section>

<section class="light_blue">
	<div class="container">
		<div class="title"> <?=__('Карта ОСИ')?></div>
		 <?=$this->element('maps') ?>
		 <div id="osi_info"></div>
	</div>
</section>

<section>
	<div class="container">
		<div class="title"><?=__('Инфографики')?></div>
		<div class="info_slider">
			<?php foreach ($infographics as $item):?>
				<?php $img = 'img_'.$l; ?>
	            <div>
					<div class="info_item" data-fancybox="info_gallery" data-src="/files/infographics/<?=$item['Infographic'][$img]?>">
						<img src="/files/infographics/<?=$item['Infographic'][$img]?>" alt="">
					</div>
				</div>
            <?php endforeach ?>
			
		</div>
		<div id="osi_video"></div>
	</div>
</section>

<section class="light_blue bg_img_section">
	<div class="container">
		<div class="title"> <?=__('Видеоролики')?></div>
		<div class="video_slider">
			<?php foreach ($videos as $item):?>
				<div>
					<div class="video_item">
						<div class="video_frame">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/<?=$item['Video']['link']?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="video_name"><?=$item['Video']['title']?></div>
					</div>
				</div>
            <?php endforeach ?>
		</div>
		<div id="osi_docs"></div>
	</div>
	<div class="bg_img bg_img_top"></div>
	<div class="bg_img bg_img_bottom"></div>
</section>


<section id="osi_docs">
	<div class="container">
		<div class="title"> <?=__('Нормативно-правовые акты')?></div>
		<ul class="doc_list">
			<?php foreach ($npas as $item):?>
				<?php $file = 'file_'.$l; ?>
				<?php $title = 'title_'.$l; ?>
				<?php $link = 'link_'.$l; ?>
					<?php if(!empty($item['Npa'][$link])): ?>
						<li>
							<a class="doc_link doc_link_2" href="<?=$item['Npa'][$link]?>" ><?=$item['Npa'][$title]?></a>
							
						</li>
					<?php else: ?>
						<li>
							<a class="doc_link" href="/files/docs/<?=$item['Npa'][$file]?>" download><?=$item['Npa'][$title]?></a>
						</li>
					<?php endif?>
	            
            <?php endforeach ?>
			
		</ul>
	</div>
</section>