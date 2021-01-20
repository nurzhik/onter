<section class="page gray">
	<div class="container">
		<div class="title title_left">Результат поиска: <span>Кашель</span></div>
		<div class="search_text">Список врачей онлайн: <span>4</span></div>
		<div class="search_res">
			<div class="search_res_list">
				<?php foreach ($q as $item): ?>
					<div class="res_item">
						<div class="res_item_left">
							<div class="res_item_img">
								<img src="/img/users/<?=$item['User']['img']?>" alt="">
							</div>
							<div class="res_item_rating">Рейтинг <span>4.9</span></div>
						</div>
						<div class="res_item_text">
							<div class="res_item_position">Лор</div>
							<div class="res_item_name"><?=$item['User']['surname']?> <?=$item['User']['name']?></div>
							<div class="res_item_exp">Стаж - <?php echo $this->Common->get_anketa($item['User']['id'],'Опыт_работы');?></div>
							<div class="text_item">
								<p>
									<?php echo $this->Common->get_anketa($item['User']['id'],'Дополнительно');?>
								</p>
							</div>
						</div>
						<a class="res_more" href="javascript:;"><span>Подробнее</span></a>
					</div>
				<?php endforeach ?>
				
				
			</div>
			<div class="search_info">
				<div class="search_info_item">
					<div class="info_item_row info__head">
						<div class="info__head_left">
							<div class="res_item_position">Лор</div>
							<div class="res_item_name">Петров Алексей Васильевич</div>
							<div class="res_item_exp">Стаж - 20 лет</div>
							<div class="res_item_rating">Рейтинг <span>4.9</span></div>
						</div>
						<div class="info__head_right">
							<div class="res_item_img">
								<img src="img/doctor_1.png" alt="">
							</div>
						</div>
					</div>
					<div class="info_item_row">
						<div class="info_row_name">Стоимость консультации: 15 000 тенге</div>
						<div class="text_item">
							<p>Чтобы договориться о консультации, напишите врачу в чат</p>
						</div>
					</div>
					<div class="info_item_row">
						<div class="info_row_name">Специлизация</div>
						<div class="text_item">
							<p>Оталаринголог</p>
						</div>
						<div class="info_row_name">Образование</div>
						<div class="text_item">
							<p>1999 г. - Челябинская государственная медицинская академия, высшее образование по специальности "Лечебное дело",</p>
							<p>2000 г. - Челябинская государственная медицинская академия, интернатура по специальности "Оториноларингология",</p>
							<p>2002 г. - Челябинская государственная медицинская академия, ординатура по специальности "Оториноларингология".</p>
						</div>
						<div class="info_row_name">Повышение квалификации</div>
						<div class="text_item">
							<p>2017 г. - Южно-Уральский государственный медицинский университет МЗ РФ, сертификация по специальности "Оториноларингология".</p>
						</div>
						<div class="info_row_name">Профессиональные навыки</div>
						<div class="text_item">
							<ul>
								<li>лечение заболеваний ЛОР органов,</li>
								<li>отоскопия,</li>
								<li>риноскопия,</li>
								<li>фарингоскопия,</li>
								<li>непрямая ларингоскопия.</li>
							</ul>
						</div>
						<a class="info_btn" href="chat.html">Договориться о времени</a>
					</div>
				</div>
				<div class="search_info_item">
					<div class="info_item_row info__head">
						<div class="info__head_left">
							<div class="res_item_position">Лор</div>
							<div class="res_item_name">Улина Марина Евгеньевна</div>
							<div class="res_item_exp">Стаж - 5 лет</div>
							<div class="res_item_rating">Рейтинг <span>4.9</span></div>
						</div>
						<div class="info__head_right">
							<div class="res_item_img">
								<img src="img/doctor_2.png" alt="">
							</div>
						</div>
					</div>
					<div class="info_item_row">
						<div class="info_row_name">Стоимость консультации: 15 000 тенге</div>
						<div class="text_item">
							<p>Чтобы договориться о консультации, напишите врачу в чат</p>
						</div>
					</div>
					<div class="info_item_row">
						<div class="info_row_name">Специлизация</div>
						<div class="text_item">
							<p>Оталаринголог</p>
						</div>
						<div class="info_row_name">Образование</div>
						<div class="text_item">
							<p>1999 г. - Челябинская государственная медицинская академия, высшее образование по специальности "Лечебное дело",</p>
						</div>
						<div class="info_row_name">Повышение квалификации</div>
						<div class="text_item">
							<p>2017 г. - Южно-Уральский государственный медицинский университет МЗ РФ, сертификация по специальности "Оториноларингология".</p>
						</div>
						<div class="info_row_name">Профессиональные навыки</div>
						<div class="text_item">
							<ul>
								<li>фарингоскопия,</li>
								<li>непрямая ларингоскопия.</li>
							</ul>
						</div>
						<a class="info_btn" href="chat.html">Договориться о времени</a>
					</div>
				</div>
				<div class="search_info_item">
					<div class="info_item_row info__head">
						<div class="info__head_left">
							<div class="res_item_position">Лор</div>
							<div class="res_item_name">Улина Марина Евгеньевна</div>
							<div class="res_item_exp">Стаж - 6 лет</div>
							<div class="res_item_rating">Рейтинг <span>4.9</span></div>
						</div>
						<div class="info__head_right">
							<div class="res_item_img">
								<img src="img/doctor_3.png" alt="">
							</div>
						</div>
					</div>
					<div class="info_item_row">
						<div class="info_row_name">Стоимость консультации: 15 000 тенге</div>
						<div class="text_item">
							<p>Чтобы договориться о консультации, напишите врачу в чат</p>
						</div>
					</div>
					<div class="info_item_row">
						<div class="info_row_name">Специлизация</div>
						<div class="text_item">
							<p>Оталаринголог</p>
						</div>
						<div class="info_row_name">Образование</div>
						<div class="text_item">
							<p>1999 г. - Челябинская государственная медицинская академия, высшее образование по специальности "Лечебное дело",</p>
						</div>
						<div class="info_row_name">Повышение квалификации</div>
						<div class="text_item">
							<p>2017 г. - Южно-Уральский государственный медицинский университет МЗ РФ, сертификация по специальности "Оториноларингология".</p>
						</div>
						<div class="info_row_name">Профессиональные навыки</div>
						<div class="text_item">
							<ul>
								<li>фарингоскопия,</li>
								<li>непрямая ларингоскопия.</li>
							</ul>
						</div>
						<a class="info_btn" href="chat.html">Договориться о времени</a>
					</div>
				</div>
			</div>
		</div>
		<div class="pagination">
			    		
				
						<div class="pag pag_btn prev_pag"><?php echo $this->Paginator->first('<<'); ?></div>
						<ul class="pagination">
						<?php echo $this->Paginator->numbers(
						    array(
						        'separator' => '',
						        'tag' => 'li',
						        'modulus' => 4
						        )
						); ?>
				    	</ul>
						<div class="pag pag_btn next_pag"><?php echo $this->Paginator->last('>>'); ?></div>
						
		</div>
		<div class="pagination">
			<a class="pag pag_btn prev_pag" href="javascript:;"></a>
			<a class="pag active" href="javascript:;">1</a>
			<a class="pag" href="javascript:;">2</a>
			<a class="pag" href="javascript:;">3</a>
			<a class="pag pag_btn next_pag" href="javascript:;"></a>
		</div>
	</div>
</section>

<section>
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
