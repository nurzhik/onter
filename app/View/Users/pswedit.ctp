<!-- <form action="/users/registration" id="UserRegistrationForm" method="POST" accept-charset="utf-8"> -->
<?php echo $this->Form->create('User');?>
<div class="center-part">
<span class="center-part__heading">Смена пароля</span>
<div class="input-row">
			<span class="input-row__text">Текущий пароль</span>
<?php
	
	echo $this->Form->hidden('id', array('value' => $id));
    echo $this->Form->input('current_password', array('label' => '', 'class' => 'input-row__input', 'placeholder' => 'Текущий пароль', 'type' => 'password'));?>
    </div>
    <div class="input-row">
			<span class="input-row__text">Новый пароль</span>
    <?php
	echo $this->Form->input('password', array('value'=>''  ,'label' => '', 'class' => 'input-row__input', 'placeholder' => 'Пароль'));?>
	</div>
	<?php
	echo $this->Form->input('password_retype', array('label' => '', 'class' => 'input-row__input', 'placeholder' => 'Повтор пароля', 'type' => 'password'));
	?>
	<div class="center-part__submit">
	<?php
	echo $this->Form->end('Изменить', array('class'=>'btn'));?>
	</div>	

</div>
