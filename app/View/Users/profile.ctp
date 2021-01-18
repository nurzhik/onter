<div class="main">
<!-- <form action="/users/registration" id="UserRegistrationForm" method="POST" accept-charset="utf-8"> -->
	<?php echo $this->Form->create('User', array('type' => 'file'));?>
		<div class="center-part">
			<span class="center-part__heading">Редактирование учетной записи</span>
			<div class="input-row">
				<span class="input-row__text">Ваше имя</span>
				<?php echo $this->Form->input('name', array('class' => 'input-row__input', 'label'=>''));?>
				<!-- <input class="input-row__input" type="text" placeholder="Как вас зовут?"> -->
			</div>
			<div class="input-row">
				<span class="input-row__text">Номер телефона</span>
				 <?php echo $this->Form->input('phone', array('class' => 'input-row__input', 'label'=>''));?>
				<!-- <input class="input-row__input" type="text" placeholder="+7(7)___-__-__" name="data[User][phone]" required="required"> -->
			</div>
			<div class="input-row">
				<span class="input-row__text">Почта</span>
				<?php echo $this->Form->input('username', array('class' => 'input-row__input', 'label'=>''));?>
			</div>
			
					
			<div class="vhod-bot">
				<a class="vhod-bot__link fl-r" href="/users/pswedit">Сменить пароль</a>
			</div>
			<div class="center-part__submit">
			<? echo $this->Form->end('Редактировать', array('class'=>'btn'));?>
				<!-- <button class="btn" type="submit">Зарегистрировать</button> -->
			</div>			
		</div>
	</form>
</div>