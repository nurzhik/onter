<section class="page breadcrumbs_section">
	<div class="container">
		<ul class="breadcrumbs">
            <li><a href="/<?=$lang?>"><?=__('Главная')?></a></li>
            <li><a><?=__('О Компании')?></a></li>
        </ul>
        <div class="title title_left"><?=__('О Компании')?></div>
	</div>
</section>

<section>
	<div class="container">
		<div class="about about_inner">
			<div class="about_img">
				<div class="double_title">
					<div class="title"><?=$page['Page']['title']?></div>
				</div>
				<img class="about_main_img" src="/img/pages/<?=$page['Page']['img']?>" alt="">
			</div>
			<div class="about_text">
				<div class="text_item">
					<?=$page['Page']['body']?>
				</div>
			</div>
		</div>

		<div class="team_block">
			<div class="double_title">
				<div class="title"><?=__('Руководство')?></div>
				<div class="sub_title"><?=__('Совет директоров')?></div>
			</div>
			<div class="team_slider">
				<?php foreach ($directors as $item):?>
		            <div>
						<div class="team_item">
							<div class="team_img">
								<img src="/img/teams/<?=$item['Team']['img']?>" alt="">
							</div>
							<div class="team_name"><?=$item['Team']['name']?></div>
							<div class="team_position"><?=$item['Team']['dolzhnost']?></div>
							<?php if(!empty($item['Team']['link'])): ?>
							<a class="team_link" href="<?=$item['Team']['link']?>" target="_balnk"><?=__('Блог Руководителя')?></a>
							<?php endif ?>
						</div>
					</div>
	            <?php endforeach ?>
			</div>
		</div>

		<div class="team_block">
			<div class="double_title">
				<div class="title"><?=__('Руководство')?></div>
				<div class="sub_title"> <?=__('Правление')?></div>
			</div>
			<div class="team_slider">
				<?php foreach ($leadership as $item):?>
		            <div>
						<div class="team_item">
							<div class="team_img">
								<img src="/img/teams/<?=$item['Team']['img']?>" alt="">
							</div>
							<div class="team_name"><?=$item['Team']['name']?></div>
							<div class="team_position"><?=$item['Team']['dolzhnost']?></div>
						</div>
					</div>
	            <?php endforeach ?>
			</div>
		</div>
	</div>
</section>

<section class="light_blue bg_img_section">
	<div class="container">
		<div class="double_title">
			<div class="title"><?=__('Отчеты')?></div>
		</div>
		<ul class="doc_list">
			<?php foreach ($reports as $item):?>
				<?php $file = 'file_'.$l; ?>
	            <li>
					<a class="doc_link" href="/files/docs/<?=$item['Doc'][$file]?>" download><?=$item['Doc']['title']?></a>
				</li>
            <?php endforeach ?>
			
			
		</ul>

		<div class="double_title">
			<div class="title"><?=__('Дополнительная информация')?></div>
		</div>
		<ul class="doc_list">
			<?php foreach ($information as $item):?>
				<?php $file = 'file_'.$l; ?>
	            <li>
					<a class="doc_link" href="/files/docs/<?=$item['Doc'][$file]?>" download><?=$item['Doc']['title']?></a>
				</li>
            <?php endforeach ?>
		</ul>
	</div>
	<div class="bg_img bg_img_top"></div>
	<div class="bg_img bg_img_bottom"></div>
</section>

<section>
	<div class="container">
		<div class="double_title">
			<div class="title"><?=__('Вопросы о противодействии коррупции')?></div>
			<div class="text_item">
				<p>В случае, если Вам стали известны сведения о коррупционных проявлениях со стороны должностных лиц и работников акционерного общества «казахстанский центр модернизации и развития жилищно-коммунального хозяйства», просим Вас обращаться по телефону: <a href="tel:+77172999471">+7 7172 999 471</a> <br>или написать сообщение на электронный адрес: <a href="mailto:doverie@zhkh.kz">doverie@zhkh.kz</a></p>
			</div>
		</div>
	</div>
</section>

<section class="light_blue bg_img_section">
	<div class="container">
		<div class="double_title">
			<div class="title"> <?=__('Вакансии')?></div>
			<div class="text_item">
				 <?=$params['vacancy_text']?>
			</div>
		</div>
		<div class="vakancy_list">
			<?php foreach ($vacancy as $item):?>
				<div class="vakancy_item">
					<div class="vakancy_head"><?=$item['Vacancy']['title']?></div>
					<div class="vakancy_body">
						<div class="text_item">
							<?=$item['Vacancy']['body']?>
						</div>
					</div>
				</div>
            <?php endforeach ?>
			
			
		</div>
	</div>
	<div class="bg_img bg_img_top"></div>
	<div class="bg_img bg_img_bottom"></div>
</section>

<section>
	<div class="container">
		<div class="double_title">
			<div class="title"><?=__('План закупок')?></div>
		</div>
		<ul class="doc_list">
			<?php foreach ($plan as $item):?>
				<?php $file = 'file_'.$l; ?>
	            <li>
					<a class="doc_link" href="/files/docs/<?=$item['Doc'][$file]?>" download><?=$item['Doc']['title']?></a>
				</li>
            <?php endforeach ?>
		</ul>
	</div>
</section>