<section class="page gray">
	<div class="container">
		<div class="title title_left">Чат с пациентом</div>

		<div class="chat">
			<div class="doc_list">
				<div class="res_item doc_item pacient_item">
					<div class="res_item_left">
						<div class="res_item_img">
							<img src="img/pacient_2.png" alt="">
						</div>
					</div>
					<div class="res_item_text">
						<div class="res_item_name">
							<span>Улина Марина Евгеньевна</span>
							<div class="msg_count">0</div>
						</div>
						<div class="text_item">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
						<div class="res_item_time">09:35</div>
					</div>
					<a class="res_more active" href="javascript:;"><span>Подробнее</span></a>
				</div>
				<div class="res_item doc_item pacient_item new_msg">
					<div class="res_item_left">
						<div class="res_item_img">
							<img src="img/doctor_2.png" alt="">
						</div>
					</div>
					<div class="res_item_text">
						<div class="res_item_name">
							<span>Улина Марина Евгеньевна</span>
							<div class="msg_count">2</div>
						</div>
						<div class="text_item">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
						<div class="res_item_time">11:11</div>
					</div>
					<a class="res_more" href="javascript:;"><span>Подробнее</span></a>
				</div>
				<div class="res_item doc_item pacient_item">
					<div class="res_item_left">
						<div class="res_item_img">
							<img src="img/doctor_4.png" alt="">
						</div>
					</div>
					<div class="res_item_text">
						<div class="res_item_name">
							<span>Купенов Сунгат Каратаевич</span>
							<div class="msg_count">0</div>
						</div>
						<div class="text_item">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
						<div class="res_item_time">13:28</div>
					</div>
					<a class="res_more" href="javascript:;"><span>Подробнее</span></a>
				</div>
			</div>
			<div class="chat_block">
				<div class="chat_head pacient_chat_head">
					<div class="chat_head_doc">
						<div class="res_item_img">
							<img src="img/pacient_2.png" alt="">
						</div>
						<div class="res_item_text">
							<div class="res_item_name">Улина Марина Евгеньевна</div>
							<div class="res_item_position">Пациент</div>
						</div>
					</div>
					<!-- <a class="video_btn" href="javascript:;"></a> -->
					<a class="pacient_video_btn yellow_btn" href="javascript:;" data-fancybox data-src="#set_consultation">Назначить консультацию</a>
				</div>
				<div class="chat_body">
					<!-- <div class="chat_date">Среда, 16 ноября</div>
					<div class="chat_item chat_item_right">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<div class="chat_item_time">09:07</div>
					</div>
					<div class="chat_item chat_item_right">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<div class="chat_item_time">09:07</div>
					</div>
					<div class="chat_item chat_item_left">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<div class="chat_item_time">09:07</div>
					</div>
					<div class="chat_item chat_item_right">
						<p>Lorem ipsum</p>
						<div class="chat_item_time">09:08</div>
					</div>
					<div class="chat_item chat_item_left">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<div class="chat_item_time">09:10</div>
					</div> -->

					<div class="chat_date">Сегодня</div>
					<div class="chat_item chat_item_right">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<div class="chat_item_time">09:07</div>
					</div>
					<div class="chat_item chat_item_left">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<div class="chat_item_time">09:07</div>
					</div>
					<div class="chat_item chat_item_right">
						<p>Lorem ipsum</p>
						<div class="chat_item_time">09:08</div>
					</div>
					<div class="chat_item chat_item_left">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<div class="chat_item_time">09:10</div>
					</div>
				</div>
				<form class="chat_bottom" action="" method="">
					<label class="chat_file" for="chat_file_input"></label>
					<input id="chat_file_input" type="file" name="" style="display: none;">
					<textarea class="chat_message" rows="1" placeholder="Введите сообщение" required></textarea>
					<button class="chat_send_btn" type="submit"></button>
				</form>
			</div>
		</div>
	</div>
</section>

<div class="popup cabinet_popup" id="set_consultation">
	<div class="cab_form_title">Назначение консультации</div>
	<form class="cab_pop_form" action="video_with_pacient.html" method="">
		<div class="double_input_block">
			<div class="input_block">
				<div class="input_name">Дата</div>
				<input class="form_input" id="set_date" type="text" name="" autocomplete="off" required="">
			</div>
			<div class="input_block">
				<div class="input_name">Время</div>
				<input class="form_input" id="set_time" type="text" name="" autocomplete="off" required="">
			</div>
		</div>
		<div class="input_block">
			<div class="input_name">Дополнительно</div>
			<textarea class="form_input" rows="3"></textarea>
		</div>
		<button class="form_btn yellow_btn" type="submit">Назначить консультацию</button>
	</form>
</div>