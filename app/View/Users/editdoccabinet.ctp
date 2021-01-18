<section class="page gray">
	<div class="container">
		<div class="title title_left">Личный кабинет</div>

		<div class="cabinet doc_cabinet">
			<div class="doc_sidebar_block">
				<div class="doc_sidebar">
					<div class="res_item_img">
						<img src="/img/doctor_4.png" alt="">
					</div>
					<div class="res_item_name"><?php echo $data['User']['name']; ?>   <?php echo $data['User']['surname']; ?> </div>
					<div class="res_item_rating">Рейтинг <span>5</span></div>
					<div class="res_item_balans">Баланс: <span>50 000 тенге</span></div>
					<div class="doctor_buttons">
						<a class="doctor_btn blue_btn" href="javascript:;">Снять деньги</a>
						<a class="doctor_btn gray_btn" href="javascript:;">Выйти</a>
					</div>
				</div>
			</div>
			<div class="cab_content_block">
						<div class="doc_cab_buttons">
							<a class="doc_cab_btn gray_btn" href="cabinet_doctor.html">Консультации</a>
							<a class="doc_cab_btn yellow_btn sms_btn" href="chat_with_pacient.html">Сообщения <span class="sms_count">2</span></a>
							<a class="doc_cab_btn gray_btn doc_edit_btn" href="javascript:;">Редактировать профиль</a>
						</div>
						<form class="doc_edit_form" action="/users/editdoccabinet"  enctype="multipart/form-data" accept-charset="utf-8" method="POST">
							<div class="double_input_block">
								<div class="input_block">
									<div class="input_name">Ваше имя</div>
									<input class="form_input" type="text"  placeholder="Введите имя"  value="<?php echo $data['User']['name']; ?> " name="data[User][name]"  required="">
								</div>
								<div class="double_input_block">
									<div class="input_block">
										<div class="input_name">Дата рождения</div>
										<input class="form_input" id="reg_date" type="text"  value="<?php echo $data['User']['date_of_birth']; ?> " name="data[User][date_of_birth]"  required="">
									</div>
									<div class="input_block">
										<div class="input_name">Пол</div>
										<select class="form_select" name="data[User][gender]">
											<option disabled="">Пол</option>
											<option value="Мужской" <?=($data['User']['gender']  == 'Мужской') ? 'selected' : '' ?> >Мужской</option>
											<option value="Женский" <?=  ($data['User']['gender']  == 'Женский') ? 'selected' : '' ?>>Женский</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form_row doc_row">
								<div class="form_row_item">
									<div class="double_input_block">
										<div class="input_block">
											<div class="input_name">Ваше образование</div>
											<input class="form_input" type="text" name="Образование" placeholder="Введите ваше образование" value="<?php echo $this->Common->get_anketa($user_id,'Образование');?>">
										</div>
										<div class="input_block">
											<div class="input_name">Опыт работы</div>
											<input class="form_input" type="text" name="Опыт_работы" placeholder="Опыт работы" value="<?php echo $this->Common->get_anketa($user_id,'Опыт_работы');?>">
										</div>
									</div>
									<div class="double_input_block">
										<div class="input_block">
											<div class="input_name">Номер счета в банке</div>
											<input class="form_input" type="text" name="Номер_счета" placeholder="Введите номер счета" value="<?php echo $this->Common->get_anketa($user_id,'Номер_счета');?>">
										</div>
										<div class="input_block">
											<div class="input_name">Email</div>
											<input class="form_input" type="email"  placeholder="Опыт работы" value="<?php echo $data['User']['username']; ?> " name="data[User][username]" >
										</div>
										<div class="input_block">
											<div class="input_name">Телефон</div>
											<input class="form_input" type="tel"  placeholder="+7 (___) ___ __ __" value="<?php echo $data['User']['phone']; ?> " name="data[User][phone]">
										</div>
									</div>
								</div>
								<div class="form_row_item">
									<div class="input_name">Дополнительно</div>
									<textarea class="form_input" name="Дополнительно"><?php echo $this->Common->get_anketa($user_id,'Дополнительно');?></textarea>
									<button class="form_btn gray_btn" type="submit">Сохранить изменения</button>
								</div>
							</div>
						</form>
					</div>
		</div>
	</div>
</section>