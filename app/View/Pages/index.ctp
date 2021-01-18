<?php if($page['Page']['alias'] != 'mezhdunarodnaya-nauchnaya-konferentsiya'): ?>

<section class="page page_heading">
	<img class="page_heading_img" src="/img/page_heading.jpg" alt=""></img>
	<div class="container">
		<div class="title"><?=$page['Page']['title']?></div>
		<ul class="breadcrumbs">
			<li><a href="/"><?=__('Главная')?></a></li>
			<li><a><?=__('О нас')?></a></li>
			<li><a><?=$page['Page']['title']?></a></li>
		</ul>
	</div>
</section>
<?php endif ?>
<?php if($page['Page']['alias'] != 'grafik-priem-grazhdan-fizicheskikh-i-yuridicheskikh-lits-rukovodstvom-tsentra-sudebnykh-ekspertiz-ministerstva-yustitsii-rk' &&  $page['Page']['alias'] != 'vakansii' && $page['Page']['alias'] != 'mezhdunarodnaya-nauchnaya-konferentsiya' && $page['Page']['alias'] != 'struktura'): ?>
	<section class="page_section">
		<div class="container">
			<div class="page_block">
				<div class="page_content">
					<div class="title"><?=$page['Page']['title']?></div>
					<div class="page_text">
						<?=$page['Page']['body']?>
					</div>
					<?php if($page['Page']['alias'] == 'o-tsentre'): ?>

						<?=$this->element('partners');?>

					<?php endif ?>
					
					<?php if($page['Page']['alias'] == 'platnye-uslugi-tsentra-sudebnykh-ekspertiz'): ?>
						<div class="doc_list">
							<?php foreach($docs as $item): ?>
				               
								<a class="doc_item" href="/files/dosc/<?php
									if($l != 'ru' ){
										echo $item['Doc']['doc_'.$l];
									}else{
										echo $item['Doc']['doc'];
									}
								?>" download><?=$item['Doc']['title']; ?></a>
				            <?php endforeach ?>
						</div>
						<?=$this->element('partners');?>
					<?php endif ?>
					<?php if($page['Page']['alias'] == 'proekt-vsemirnogo-banka'): ?>
						<div class="title">СМИ О Проекте</div>
						<div class="gallery_block">
							<div class="bank_gallery">
								<?php foreach($slides as $item): ?>
									<?php if($item['Slide']['type_id'] == 0): ?>
											<div>
							                <div class="bank_gal_item" data-fancybox="gallery" data-src="/img/slides/<?=$item['Slide']['img']; ?>">
													<img src="/img/slides/<?=$item['Slide']['img']; ?>">
												</div>
											</div>
									<?php endif ?>
					            <?php endforeach ?>
							</div>
							<div class="bank_gal_control"></div>
						</div>
						<?=$this->element('partners');?>
					<?php endif ?>
					<?php if($page['Page']['alias'] == 'standartizatsiya-sertifikatov'): ?>
						<div class="cert_block history_block_list">
							<div class="cert_block_title"><?=__('Аттестаты')?></div>
							<div class="cert_list">
								<?php foreach($slides as $item): ?>
									<?php if($item['Slide']['type_id'] == 1): ?>
					               <div>
											<div class="cert_item" data-fancybox="certificates" data-src="/img/slides/<?=$item['Slide']['img']; ?>">
												<img src="/img/slides/<?=$item['Slide']['img']; ?>" alt="">
											</div>
					               </div>
									<?php endif ?>
					            <?php endforeach ?>
							</div>
						</div>
					<?php endif ?>
					<!-- <?php if($page['Page']['alias'] != 'mezhdunarodnoe-sotrudnichestvo'): ?>
						<?=$this->element('partners');?>
					<?php endif ?> -->
				</div>
				<?=$this->element('sidebar');?>
			</div>
		</div>
	</section>
<?php elseif ($page['Page']['alias'] == 'mezhdunarodnaya-nauchnaya-konferentsiya'):?>
	<section class="page page_heading">
			<img class="page_heading_img" src="/img/page_heading.jpg" alt=""></img>
			<div class="container">
				<div class="title"><?=__('Международная конференция')?></div>
				<ul class="breadcrumbs">
					<li><a href="/"><?=__('Главная')?></a></li>
					<li><a><?=__('Международная конференция')?></a></li>
				</ul>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="conference">
					<div class="conf_img">
						<img src="/img/pages/<?=$page['Page']['img']?>">
					</div>
					<div class="conf_text">
						<div class="title small_title"><?=$page['Page']['title']?></div>
						<div class="text_item">
							<?=$page['Page']['body']?>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php else: ?>
<section>
	<div class="container">
		<?php if($page['Page']['alias'] != 'struktura'): ?>
			<div class="title "><?=$page['Page']['title']?></div>
		<?php endif ?>
		<div class="table_block">
			<?=$page['Page']['body']?>
		</div>
		<?php if($page['Page']['alias'] != 'struktura'): ?>
		<?=$this->element('partners');?>
		<?php endif ?>
	</div>
</section>
<?php if($page['Page']['alias'] == 'struktura'): ?>
			<section class="dark_blue">
				<div class="container">
					<div class="team_list">
						<?php foreach($teams as $item): ?>
							<?php if($item['Team']['type_id'] ==0): ?>
							<div class="team_item" data-fancybox data-src="#team_popup_id">
								<a href="javascript:;" class="team_img" data-text="<?=$item['Team']['body']; ?>">
									<img src="/img/teams/<?=$item['Team']['img']; ?>">
								</a>
								<div class="dir_position"><?=$item['Team']['dolzhnost']; ?></div>
								<div class="team_name"><?=$item['Team']['name']; ?></div>
							</div>
							<?php endif ?>
	                    <?php endforeach ?>
					</div>
				</div>
			</section>
			<section class="light_blue">
				<div class="container">
					<div class="team_list">
						<?php foreach($teams as $item): ?>
							<?php if($item['Team']['type_id'] ==1): ?>
							<div class="team_item" data-fancybox data-src="#team_popup_id">
								<div class="team_img" data-text="<?=$item['Team']['body']; ?>" >
									<img src="/img/teams/<?=$item['Team']['img']; ?>">
								</div>
								<div class="dir_position"><?=$item['Team']['dolzhnost']; ?></div>
								<div class="team_name"><?=$item['Team']['name']; ?></div>
							</div>
							<?php endif ?>
	                    <?php endforeach ?>
					</div>
				</div>
			</section>
			<div class="popup team_popup" id="team_popup_id">
				<div class="team_info_heading">
					<div class="team_img">
						<img src="" alt="">
					</div>
					<div class="team_info_name">
						<div class="team_name"></div>
						<div class="dir_position"></div>
					</div>
				</div>
				<div class="team_info_text"></div>
			</div>
			<?=$this->element('maps');?>
			<section>
				<div class="container">
					<?=$this->element('partners');?>
				</div>
			</section>
		<?php endif ?>
<?php endif ?>