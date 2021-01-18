<?php 

echo $this->Form->create('User');
echo $this->Form->input('username', array('label' => 'Логин'));
echo $this->Form->input('password', array('label' => 'Пароль', 'type'=>'password', 'value'=>'', 'autocomplete'=>'off'));
echo $this->Form->input('password_repeat', array('label' => 'Повтор пароля', 'type'=>'password', 'value'=>'', 'autocomplete'=>'off', 'required' => false));
echo $this->Form->end('Редактировать');
