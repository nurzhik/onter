<section class="page gray full_section">
	<div class="container">
		<div class="title title_left">Регистрация врача</div>
		<form class="reg_form" action="/users/docregistration" enctype="multipart/form-data" accept-charset="utf-8" method="POST">
			<div class="input_block">
				<div class="input_name">Ваше имя</div>
				<input class="form_input" type="text" name="data[User][name]" placeholder="Введите имя" required="">
			</div>
			<div class="input_block">
				<div class="input_name">Ваша фамилия</div>
				<input class="form_input" type="text" name="data[User][surname]" placeholder="Введите фамилию">
			</div>
			<div class="double_input_block">
				<div class="input_block">
					<div class="input_name">Дата рождения</div>
					<input class="form_input" id="reg_date" type="text" name="data[User][date_of_birth]" required="">
				</div>
				<div class="input_block">
					<div class="input_name">Пол</div>
					<select class="form_select" name="data[User][gender]">
						<option selected disabled="">Пол</option>
						<option>Мужской</option>
						<option>Женский</option>
					</select>
				</div>
			</div>
			<div class="double_input_block">
				<div class="input_block">
					<div class="input_name">Образование</div>
					<select class="form_select"  name="data[UserFields][Образование]" >
						<option selected disabled="">Образование</option>
						<option>Высшее</option>
						<option>Среднее специальное</option>
						<option>Среднее</option>
					</select>
				</div>
				<div class="input_block">
					<div class="input_name">Опыт работы</div>
					<select class="form_select"  name="data[UserFields][Опыт_работы]" >
						<option selected disabled="">Опыт работы</option>
						<option>Без опыта</option>
						<option>от 1 до 3 лет</option>
						<option>от 4 до 7 лет</option>
						<option>более 10 лет</option>
					</select>
				</div>
			</div>
			<div class="form_row">
				<div class="form_row_item">
					<div class="double_input_block">
						<div class="input_block">
							<div class="input_name">Номер телефона</div>
							<input class="form_input" type="tel" name="data[User][phone]" placeholder="Введите ваш номер" required="">
						</div>
						<div class="input_block">
							<div class="input_name">Email</div>
							<input class="form_input" type="email" name="data[User][username]" placeholder="Введите ваш Email">
						</div>
					</div>
					<div class="input_block">
						<div class="input_name">Номер счета в банке</div>
						<input class="form_input" type="text" name="data[UserFields][Номер_счета]" placeholder="Введите номер счета">
					</div>
					<div class="double_input_block">
						<div class="input_block pass_input_block">
							<div class="input_name">Пароль</div>
							<input class="form_input pass_input pass_input__pass" type="password" name="data[User][password]" required="">
							<div class="input_err pass_err"></div>
							<div class="pass_eye"></div>
						</div>
						<div class="input_block pass_input_block">
							<div class="input_name">Повторите пароль</div>
							<input class="form_input pass_input pass_input__repeat" type="password" name="data[User][password_repeat]" required="">
							<div class="input_err pass_err"></div>
							<div class="pass_eye"></div>
						</div>
					</div>
				</div>
				<div class="form_row_item">
					<div class="input_name">Дополнительно</div>
					<textarea class="form_input" name="data2[UserFields][Дополнительно]"></textarea>
				</div>
			</div>

			<div class="reg_bottom">
				<label class="donwload_file" for="doc_file">
					<div class="download_file_icon"></div>
					<div class="download_file_text" data-text="Пожалуйста перетащите файл, или кликните чтобы загрузить">Пожалуйста перетащите файл, или кликните чтобы загрузить</div>
				</label>
				<input style="display: none;" id="doc_file" type="file" name="data[User][doc]">
			</div>

			<div class="reg_bottom">
				<div class="accept">
					<input type="checkbox" name="" id="accept_check">
					<label for="accept_check">Я соглашаюсь с политикой конфиденциальности</label>
				</div>
				<button class="reg_btn blue_btn" type="submit">Зарегистрироваться</button>
			</div>
		</form>
	</div>
</section>