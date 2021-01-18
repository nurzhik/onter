<div class="title admin_t">
		<h2>Редактирование пароля</h2>
	</div>
<?php 

// debug($c_list);
echo $this->Form->create('User', array('type' => 'file'));
echo $this->Form->input('password', array('label' => 'Пароль', 'value' => ''));
echo $this->Form->input('password_repeat', array('label' => 'Повторите пароль:'));
echo $this->Form->end('Редактировать');
?>